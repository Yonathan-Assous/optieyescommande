<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 10:27:55 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 10:37:27 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = 14 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Blanc%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre NOT LIKE '%Photo%'
ERROR - 2016-09-26 10:37:28 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = 14 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Blanc%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre NOT LIKE '%Photo%'
ERROR - 2016-09-26 10:37:31 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = 14 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Blanc%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-09-26 10:37:31 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = 14 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Blanc%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 11:06:56 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 11:17:26 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-26 11:17:26 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-26 11:17:26 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-26 11:17:26 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-26 11:17:26 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-26 11:17:26 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-26 11:17:26 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-26 11:17:26 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-26 11:17:26 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160926021,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 11:23:09 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 11:26:47 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 845
ERROR - 2016-09-26 12:03:29 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1591
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1617
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1669
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1697
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1810
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1866
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1905
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1912
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2194
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2277
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2284
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2538
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2825
ERROR - 2016-09-26 12:03:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2904
ERROR - 2016-09-26 12:04:23 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1591
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1617
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1669
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1697
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1810
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1866
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1905
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1912
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2194
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2277
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2284
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2538
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2825
ERROR - 2016-09-26 12:04:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2904
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 12:12:41 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 12:30:14 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 12:37:39 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-26 12:37:39 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-26 12:37:39 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-26 12:37:39 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-26 12:37:39 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-26 12:37:39 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-26 12:37:39 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-26 12:37:39 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-26 12:37:39 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160926034,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-26 12:38:46 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-26 12:38:46 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-26 12:38:46 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-26 12:38:46 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-26 12:38:46 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-26 12:38:46 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-26 12:38:46 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-26 12:38:46 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-26 12:38:46 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160926035,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-26 12:38:49 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-26 12:38:49 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-26 12:38:49 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-26 12:38:49 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-26 12:38:49 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-26 12:38:49 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-26 12:38:49 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-26 12:38:49 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-26 12:38:49 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160926035,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-26 12:51:18 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-26 12:51:18 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-26 12:51:18 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-26 12:51:18 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-26 12:51:18 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-26 12:51:18 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-26 12:51:18 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-26 12:51:18 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-26 12:51:18 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160926037,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 13:17:51 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 14:21:03 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 14:45:40 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 15:26:05 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 15:32:55 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 15:42:33 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 16:11:46 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 13
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 24
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 729
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 730
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 731
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 732
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1591
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1617
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1669
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1697
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1810
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1866
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1905
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 1912
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2194
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2277
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2284
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2538
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2825
ERROR - 2016-09-26 16:11:46 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande_new.php 2904
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 16:47:53 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 16:58:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande+tarif_livraison) AS total FROM commande WHERE id_users = static AND type_commande = 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-09-26 16:58:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT SUM(total_commande) AS total FROM commande WHERE id_users = static AND type_commande > 1 AND date_commande > '2016-01-01 00:00:00'
ERROR - 2016-09-26 16:58:02 --> Query error: Unknown column 'static' in 'where clause' - SELECT * FROM users WHERE id_users=static
ERROR - 2016-09-26 16:58:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1275
ERROR - 2016-09-26 16:58:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1276
ERROR - 2016-09-26 16:58:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-09-26 16:58:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1277
ERROR - 2016-09-26 16:58:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1278
ERROR - 2016-09-26 16:58:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1279
ERROR - 2016-09-26 16:58:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1279
ERROR - 2016-09-26 16:58:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1279
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 17:12:52 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 18:25:54 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 18:32:34 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 18:37:45 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 18:49:38 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 19:10:31 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
ERROR - 2016-09-26 19:24:43 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1318
ERROR - 2016-09-26 19:24:43 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1319
ERROR - 2016-09-26 19:24:43 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1320
ERROR - 2016-09-26 19:24:43 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1321
ERROR - 2016-09-26 19:24:43 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1322
ERROR - 2016-09-26 19:24:43 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1323
ERROR - 2016-09-26 19:24:43 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1324
ERROR - 2016-09-26 19:24:43 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1325
ERROR - 2016-09-26 19:24:43 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160926185,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: title /home/www/optieyescommande.com/htdocs/application/views/header.php 17
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/header.php 77
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 6
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 7
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 10
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 11
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 14
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 15
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 18
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 19
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 22
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: page /home/www/optieyescommande.com/htdocs/application/views/menu.php 23
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/menu.php 35
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: infos_user /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 23
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 36
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 79
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 95
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: user_info /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 103
ERROR - 2016-09-26 19:30:29 --> Severity: Notice  --> Undefined variable: region /home/www/optieyescommande.com/htdocs/application/views/dashboard.php 1540
