<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2019-07-14 00:01:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ORDER BY date_commande DESC' at line 21 - SELECT c.*, information_commande,ancienne_commande,reference_client,total_commande,penalty,libelle_etat_commande,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,email,
                                          generation_verre,type_generation_verre,libelle_verre,commentaire,libelle_verre_personnalise,type_commande, ib.intitule_bl as nouvel_intitule, ib.date_bl,ib.type_optique, ib.intitule_type_optique, ib.quantite_type_optique
                                   FROM commande_temp c
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN verres v ON v.id_verre = c.id_verre
                                   INNER JOIN users u ON u.id_users = c.id_users
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire_temp cc ON cc.id_commande = c.id_commande
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
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 00:16:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 09:26:32 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/facture_client.php 5
ERROR - 2019-07-14 09:26:32 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/facture_client.php 10
ERROR - 2019-07-14 09:26:32 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/facture_client.php 21
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 09:53:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 10:16:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 10:20:19 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 10:24:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 10:44:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =151
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
ERROR - 2019-07-14 10:48:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =188
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
ERROR - 2019-07-14 10:48:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =188
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
ERROR - 2019-07-14 10:49:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =188
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
ERROR - 2019-07-14 10:57:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 10:58:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 10:58:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 10:59:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =145
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
ERROR - 2019-07-14 12:17:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =138
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
ERROR - 2019-07-14 12:18:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =269
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
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:21:52 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:21:52 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2209
ERROR - 2019-07-14 12:23:08 --> Severity: Notice  --> Undefined property: stdClass::$excl /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:23:08 --> Severity: Warning  --> in_array() expects parameter 2 to be array, null given /home/www/optieyescommande.com/htdocs/application/controllers/index.php 2227
ERROR - 2019-07-14 12:31:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =177
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
ERROR - 2019-07-14 12:34:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =138
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
ERROR - 2019-07-14 12:35:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =138
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
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 12:40:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 12:41:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 12:41:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =153
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
ERROR - 2019-07-14 12:42:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =237
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
ERROR - 2019-07-14 12:47:45 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =153
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
ERROR - 2019-07-14 13:04:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =138
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
ERROR - 2019-07-14 13:43:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:43:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:43:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:44:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:45:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:46:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:46:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:47:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:48:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:49:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:49:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:50:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 13:50:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =78
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
ERROR - 2019-07-14 14:55:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =154
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
ERROR - 2019-07-14 15:33:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =356
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
                                   WHERE c.id_commande= AND c.id_users =356
                                   ORDER BY date_commande DESC
ERROR - 2019-07-14 15:33:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =356
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
                                   WHERE c.id_commande= AND c.id_users =356
                                   ORDER BY date_commande DESC
ERROR - 2019-07-14 15:34:18 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 15:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =339
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
                                   WHERE c.id_commande= AND c.id_users =339
                                   ORDER BY date_commande DESC
ERROR - 2019-07-14 15:43:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 15:45:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 15:49:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 16:11:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '18'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '29'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '30'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '41'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '60'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '60'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '60'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '102'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '113'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '113'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '113'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '114'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '136'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '149'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '166'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '174'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '179'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '208'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '208'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '208'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '246'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '247'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '250'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '250'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '250'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '257'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '260'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '265'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '268'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '282'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '285'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '285'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '285'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '296'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:11:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:11:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '298'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '305'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '307'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '308'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '309'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '310'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '311'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '312'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '313'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '314'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '315'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '316'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '316'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '316'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '320'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '321'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '321'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '321'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '324'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '326'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '331'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '337'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '339'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '340'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '343'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '344'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '344'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '344'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '345'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '348'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '351'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '351'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '351'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '354'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '358'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '358'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '358'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:12 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:12 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '360'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '360'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '360'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:13 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:13 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '362'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '362'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '362'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '364'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:14 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:14 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '370'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '370'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '370'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '373'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:15 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:15 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '374'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '377'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '378'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:16 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:16 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '381'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '381'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '381'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '383'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:17 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:17 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '384'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '384'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '384'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '389'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:18 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:18 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '391'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '396'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '396'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '396'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:19 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:19 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '397'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '398'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '400'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:20 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:20 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '401'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '404'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '404'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '404'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:21 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:21 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '405'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:22 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:22 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '412'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '414'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:23 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:23 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '416'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '416'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '416'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '18'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '18'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:24 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:24 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '27'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '27'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '29'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '29'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:25 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:25 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '30'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '30'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '32'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '32'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '41'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '41'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:26 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:26 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '46'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '46'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '60'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '60'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '60'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '69'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '69'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:27 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:27 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '78'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '78'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '97'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '97'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '102'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '102'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:28 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:28 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '107'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '107'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '108'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '108'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:29 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:29 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '109'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '109'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '113'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '113'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '113'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '114'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '114'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:30 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:30 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '115'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '115'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '130'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '130'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '136'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '136'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:31 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:31 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '137'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '137'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '138'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '138'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '142'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '142'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:32 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:32 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '144'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '144'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '145'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '145'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:33 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:33 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '146'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '146'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '147'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '147'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '149'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '149'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:34 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:34 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '151'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '151'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '152'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '152'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '153'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '153'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:35 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:35 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '154'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '154'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '157'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '157'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:36 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:36 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '162'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '162'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '166'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '166'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '173'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '173'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:37 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:37 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '174'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '174'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '177'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '177'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:38 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:38 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '179'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '179'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '181'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '181'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '188'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '188'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:39 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:39 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '191'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '191'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '193'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '193'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '201'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '201'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:40 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:40 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '206'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '206'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '208'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '208'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '208'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '218'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '218'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:41 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:41 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '220'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '220'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '233'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '233'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:42 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:42 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '234'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '234'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '237'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '237'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:43 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:43 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '239'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '239'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '242'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '242'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '245'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '245'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:44 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:44 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '246'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '246'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '247'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '247'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:45 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:45 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '249'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '249'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '250'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '250'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '250'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '253'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '253'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:46 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:46 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '255'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '255'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '257'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '257'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '260'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '260'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:47 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:47 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '265'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '265'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '268'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '268'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '269'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '269'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:48 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:48 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '277'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '277'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '278'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '278'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '280'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '280'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:49 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:49 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '282'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '282'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '283'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '283'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:50 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:50 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '285'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '285'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '285'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '289'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '289'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '292'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '292'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:51 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:51 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '296'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '296'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '298'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '298'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '305'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '305'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:52 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:52 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '307'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '307'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '308'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '308'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '309'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '309'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:53 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:53 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '310'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '310'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '311'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '311'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:54 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:54 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '312'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '312'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '313'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '313'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '314'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '314'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:55 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:55 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '315'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '315'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '316'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '316'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '316'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:56 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:56 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '320'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '320'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '321'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '321'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '321'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '324'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '324'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:57 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:57 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '326'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '326'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '331'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '331'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '337'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '337'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:58 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:58 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '339'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '339'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '340'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '340'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:12:59 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:12:59 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '342'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '342'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '343'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '343'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '344'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '344'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '344'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:00 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:00 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '345'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '345'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '348'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '348'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:01 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:01 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '351'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '351'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '351'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '354'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '354'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '358'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '358'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '358'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:02 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:02 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '360'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '360'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '360'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '362'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '362'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '362'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:03 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:03 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '364'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '364'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '370'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '370'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '370'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '373'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '373'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:04 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:04 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '374'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '374'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '377'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '377'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:05 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:05 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '378'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '378'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '381'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '381'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '381'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '383'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '383'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:06 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:06 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '384'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '384'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '384'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '389'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '389'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:07 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:07 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '391'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '391'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '396'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '396'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '396'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '397'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '397'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:08 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:08 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '398'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '398'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '400'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '400'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '401'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '401'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '404'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '404'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '404'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '405'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '405'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:10 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:10 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '412'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '412'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '414'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '414'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 16:13:11 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 16:13:11 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '416'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '07-2019'
            AND id_etat_commande = 6
            AND id_users = '416'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '07-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '07-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '07-2019'
        AND id_etat_commande = 6
        AND id_users = '416'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 17:28:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:12 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-07-14 17:28:12 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-07-14 17:28:12 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-07-14 17:28:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:16 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-07-14 17:28:16 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-07-14 17:28:16 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-07-14 17:28:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-06 00:00:00" AND date_commande < "2019-07-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-06 00:00:00" AND date_commande < "2019-07-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-06 00:00:00" AND date_commande < "2019-07-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-06 00:00:00" AND date_commande < "2019-07-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-07 00:00:00" AND date_commande < "2019-07-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-07 00:00:00" AND date_commande < "2019-07-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-07 00:00:00" AND date_commande < "2019-07-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-07 00:00:00" AND date_commande < "2019-07-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-08 00:00:00" AND date_commande < "2019-07-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-08 00:00:00" AND date_commande < "2019-07-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-08 00:00:00" AND date_commande < "2019-07-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-08 00:00:00" AND date_commande < "2019-07-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-13 00:00:00" AND date_commande < "2019-07-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-13 00:00:00" AND date_commande < "2019-07-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-13 00:00:00" AND date_commande < "2019-07-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-13 00:00:00" AND date_commande < "2019-07-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-15 00:00:00" AND date_commande < "2019-07-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-15 00:00:00" AND date_commande < "2019-07-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-15 00:00:00" AND date_commande < "2019-07-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-15 00:00:00" AND date_commande < "2019-07-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-16 00:00:00" AND date_commande < "2019-07-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-16 00:00:00" AND date_commande < "2019-07-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-16 00:00:00" AND date_commande < "2019-07-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-16 00:00:00" AND date_commande < "2019-07-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-17 00:00:00" AND date_commande < "2019-07-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-17 00:00:00" AND date_commande < "2019-07-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-17 00:00:00" AND date_commande < "2019-07-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-17 00:00:00" AND date_commande < "2019-07-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-18 00:00:00" AND date_commande < "2019-07-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-18 00:00:00" AND date_commande < "2019-07-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-18 00:00:00" AND date_commande < "2019-07-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-18 00:00:00" AND date_commande < "2019-07-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-19 00:00:00" AND date_commande < "2019-07-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-19 00:00:00" AND date_commande < "2019-07-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-19 00:00:00" AND date_commande < "2019-07-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-19 00:00:00" AND date_commande < "2019-07-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-20 00:00:00" AND date_commande < "2019-07-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-20 00:00:00" AND date_commande < "2019-07-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-20 00:00:00" AND date_commande < "2019-07-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-20 00:00:00" AND date_commande < "2019-07-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-21 00:00:00" AND date_commande < "2019-07-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-21 00:00:00" AND date_commande < "2019-07-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-21 00:00:00" AND date_commande < "2019-07-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-21 00:00:00" AND date_commande < "2019-07-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-22 00:00:00" AND date_commande < "2019-07-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-22 00:00:00" AND date_commande < "2019-07-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-22 00:00:00" AND date_commande < "2019-07-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-22 00:00:00" AND date_commande < "2019-07-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-23 00:00:00" AND date_commande < "2019-07-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-23 00:00:00" AND date_commande < "2019-07-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-23 00:00:00" AND date_commande < "2019-07-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-23 00:00:00" AND date_commande < "2019-07-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-24 00:00:00" AND date_commande < "2019-07-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-24 00:00:00" AND date_commande < "2019-07-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-24 00:00:00" AND date_commande < "2019-07-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-24 00:00:00" AND date_commande < "2019-07-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-25 00:00:00" AND date_commande < "2019-07-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-25 00:00:00" AND date_commande < "2019-07-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-25 00:00:00" AND date_commande < "2019-07-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-25 00:00:00" AND date_commande < "2019-07-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-26 00:00:00" AND date_commande < "2019-07-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-26 00:00:00" AND date_commande < "2019-07-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-26 00:00:00" AND date_commande < "2019-07-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-26 00:00:00" AND date_commande < "2019-07-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-27 00:00:00" AND date_commande < "2019-07-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-27 00:00:00" AND date_commande < "2019-07-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-27 00:00:00" AND date_commande < "2019-07-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-27 00:00:00" AND date_commande < "2019-07-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-28 00:00:00" AND date_commande < "2019-07-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-28 00:00:00" AND date_commande < "2019-07-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-28 00:00:00" AND date_commande < "2019-07-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-28 00:00:00" AND date_commande < "2019-07-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-29 00:00:00" AND date_commande < "2019-07-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-29 00:00:00" AND date_commande < "2019-07-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-29 00:00:00" AND date_commande < "2019-07-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-29 00:00:00" AND date_commande < "2019-07-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-30 00:00:00" AND date_commande < "2019-07-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-30 00:00:00" AND date_commande < "2019-07-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-30 00:00:00" AND date_commande < "2019-07-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-30 00:00:00" AND date_commande < "2019-07-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-31 00:00:00" AND date_commande < "2019-07-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-31 00:00:00" AND date_commande < "2019-07-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:28:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-31 00:00:00" AND date_commande < "2019-07-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-31 00:00:00" AND date_commande < "2019-07-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 17:36:53 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 17:37:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 17:39:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 17:40:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 17:41:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 17:41:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =400
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
ERROR - 2019-07-14 19:05:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =269
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
ERROR - 2019-07-14 21:21:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2019-07-14 21:25:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =218
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
                                   WHERE c.id_commande= AND c.id_users =218
                                   ORDER BY date_commande DESC
ERROR - 2019-07-14 22:13:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:01 --> Severity: Notice  --> Undefined index: password /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 6
ERROR - 2019-07-14 22:14:01 --> Severity: Notice  --> Undefined index: login /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 11
ERROR - 2019-07-14 22:14:01 --> Severity: Notice  --> Undefined variable: passError /home/www/optieyescommande.com/htdocs/application/views/admin/dashboard.php 22
ERROR - 2019-07-14 22:14:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-06 00:00:00" AND date_commande < "2019-07-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-06 00:00:00" AND date_commande < "2019-07-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-06 00:00:00" AND date_commande < "2019-07-06 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-06 00:00:00" AND date_commande < "2019-07-06 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-07 00:00:00" AND date_commande < "2019-07-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-07 00:00:00" AND date_commande < "2019-07-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-07 00:00:00" AND date_commande < "2019-07-07 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-07 00:00:00" AND date_commande < "2019-07-07 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-08 00:00:00" AND date_commande < "2019-07-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-08 00:00:00" AND date_commande < "2019-07-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-08 00:00:00" AND date_commande < "2019-07-08 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-08 00:00:00" AND date_commande < "2019-07-08 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-13 00:00:00" AND date_commande < "2019-07-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-13 00:00:00" AND date_commande < "2019-07-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-13 00:00:00" AND date_commande < "2019-07-13 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-13 00:00:00" AND date_commande < "2019-07-13 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-14 00:00:00" AND date_commande < "2019-07-14 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-15 00:00:00" AND date_commande < "2019-07-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-15 00:00:00" AND date_commande < "2019-07-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-15 00:00:00" AND date_commande < "2019-07-15 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-15 00:00:00" AND date_commande < "2019-07-15 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-16 00:00:00" AND date_commande < "2019-07-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-16 00:00:00" AND date_commande < "2019-07-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-16 00:00:00" AND date_commande < "2019-07-16 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-16 00:00:00" AND date_commande < "2019-07-16 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-17 00:00:00" AND date_commande < "2019-07-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-17 00:00:00" AND date_commande < "2019-07-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-17 00:00:00" AND date_commande < "2019-07-17 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-17 00:00:00" AND date_commande < "2019-07-17 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-18 00:00:00" AND date_commande < "2019-07-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-18 00:00:00" AND date_commande < "2019-07-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-18 00:00:00" AND date_commande < "2019-07-18 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-18 00:00:00" AND date_commande < "2019-07-18 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-19 00:00:00" AND date_commande < "2019-07-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-19 00:00:00" AND date_commande < "2019-07-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-19 00:00:00" AND date_commande < "2019-07-19 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-19 00:00:00" AND date_commande < "2019-07-19 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-20 00:00:00" AND date_commande < "2019-07-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-20 00:00:00" AND date_commande < "2019-07-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-20 00:00:00" AND date_commande < "2019-07-20 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-20 00:00:00" AND date_commande < "2019-07-20 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-21 00:00:00" AND date_commande < "2019-07-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-21 00:00:00" AND date_commande < "2019-07-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-21 00:00:00" AND date_commande < "2019-07-21 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-21 00:00:00" AND date_commande < "2019-07-21 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-22 00:00:00" AND date_commande < "2019-07-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-22 00:00:00" AND date_commande < "2019-07-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-22 00:00:00" AND date_commande < "2019-07-22 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-22 00:00:00" AND date_commande < "2019-07-22 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-23 00:00:00" AND date_commande < "2019-07-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-23 00:00:00" AND date_commande < "2019-07-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-23 00:00:00" AND date_commande < "2019-07-23 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-23 00:00:00" AND date_commande < "2019-07-23 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-24 00:00:00" AND date_commande < "2019-07-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-24 00:00:00" AND date_commande < "2019-07-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-24 00:00:00" AND date_commande < "2019-07-24 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-24 00:00:00" AND date_commande < "2019-07-24 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-25 00:00:00" AND date_commande < "2019-07-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-25 00:00:00" AND date_commande < "2019-07-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-25 00:00:00" AND date_commande < "2019-07-25 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-25 00:00:00" AND date_commande < "2019-07-25 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-26 00:00:00" AND date_commande < "2019-07-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-26 00:00:00" AND date_commande < "2019-07-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-26 00:00:00" AND date_commande < "2019-07-26 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-26 00:00:00" AND date_commande < "2019-07-26 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-27 00:00:00" AND date_commande < "2019-07-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-27 00:00:00" AND date_commande < "2019-07-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-27 00:00:00" AND date_commande < "2019-07-27 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-27 00:00:00" AND date_commande < "2019-07-27 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-28 00:00:00" AND date_commande < "2019-07-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-28 00:00:00" AND date_commande < "2019-07-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-28 00:00:00" AND date_commande < "2019-07-28 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-28 00:00:00" AND date_commande < "2019-07-28 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-29 00:00:00" AND date_commande < "2019-07-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-29 00:00:00" AND date_commande < "2019-07-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-29 00:00:00" AND date_commande < "2019-07-29 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-29 00:00:00" AND date_commande < "2019-07-29 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-30 00:00:00" AND date_commande < "2019-07-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-30 00:00:00" AND date_commande < "2019-07-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-30 00:00:00" AND date_commande < "2019-07-30 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-30 00:00:00" AND date_commande < "2019-07-30 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-31 00:00:00" AND date_commande < "2019-07-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-31 00:00:00" AND date_commande < "2019-07-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 22:14:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') AND date_commande > "2019-07-31 00:00:00" AND date_commande < "2019-07-31 23:5' at line 1 - SELECT tarif_packaging AS total, MAX(date_commande) FROM commande WHERE id_users IN() AND date_commande > "2019-07-31 00:00:00" AND date_commande < "2019-07-31 23:59:59" GROUP BY id_users ORDER BY date_commande DESC
ERROR - 2019-07-14 23:06:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
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
ERROR - 2019-07-14 23:10:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND c.id_users =222
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
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 74
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 9
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 12
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 13
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 21
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 24
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 25
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 30
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 31
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 34
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 38
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 39
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 50
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 51
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 65
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1871
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 23:14:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 2430
ERROR - 2019-07-14 23:39:09 --> Severity: Warning  --> mysqli_query(): (21000/1242): Subquery returns more than 1 row /home/www/optieyescommande.com/htdocs/system/database/drivers/mysqli/mysqli_driver.php 179
ERROR - 2019-07-14 23:39:09 --> Query error: Subquery returns more than 1 row - SELECT c.id_users, 
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '06-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND DATE_FORMAT(date_commande, '%m-%Y') = '06-2019' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_matin,
        (SELECT IFNULL(COUNT(1),0) AS exp
            FROM commande cc
            WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '06-2019'
            AND id_etat_commande = 6
            AND id_users = '222'
            AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '06-2019' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
            GROUP BY id_users,date(date_update_commande)
        ) AS exp_soir
        FROM commande c
        WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '06-2019'
        AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '06-2019'
        AND id_etat_commande = 6
        AND id_users = '222'
        GROUP BY c.id_users,date(date_update_commande)
        ORDER BY c.id_users ASC
ERROR - 2019-07-14 23:39:09 --> Severity: Notice  --> Array to string conversion /home/www/optieyescommande.com/htdocs/application/core/MY_Controller.php 60
