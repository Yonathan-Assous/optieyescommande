<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-07-28 10:39:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT v.id_verre,libelle_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre
                                   FROM verres v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE id_generation_verre IN(undefined) AND v.id_indice_verre=undefined
                                   AND v.active = 1
								   GROUP BY id_verre
                                   ORDER BY indice_verre, v.id_verre, id_grille_tarifaire
ERROR - 2016-07-28 11:29:36 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1135
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1137
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-07-28 11:29:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-07-28 11:29:37 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1135
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1137
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-07-28 11:29:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-07-28 11:40:30 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT v.id_verre,libelle_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre
                                   FROM verres v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE id_generation_verre IN(undefined) AND v.id_indice_verre=undefined
                                   AND v.active = 1
								   GROUP BY id_verre
                                   ORDER BY indice_verre, v.id_verre, id_grille_tarifaire
ERROR - 2016-07-28 11:40:31 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT v.id_verre,libelle_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre
                                   FROM verres v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE id_generation_verre IN(undefined) AND v.id_indice_verre=undefined
                                   AND v.active = 1
								   GROUP BY id_verre
                                   ORDER BY indice_verre, v.id_verre, id_grille_tarifaire
ERROR - 2016-07-28 12:06:35 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-07-28 12:06:35 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-07-28 12:06:35 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-07-28 17:11:20 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1135
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1137
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-07-28 17:11:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-07-28 17:11:21 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1135
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1137
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-07-28 17:11:21 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-07-28 17:48:45 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-07-28 17:48:45 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-07-28 17:48:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
