<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-07-22 12:20:33 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-07-22 12:20:33 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-07-22 12:20:33 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-07-22 12:33:32 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT v.id_verre,libelle_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre
                                   FROM verres v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE id_generation_verre IN(undefined) AND v.id_indice_verre=undefined
                                   AND v.active = 1
								   GROUP BY id_verre
                                   ORDER BY indice_verre, v.id_verre, id_grille_tarifaire
ERROR - 2016-07-22 12:33:40 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT v.id_verre,libelle_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre
                                   FROM verres v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE id_generation_verre IN(undefined) AND v.id_indice_verre=undefined
                                   AND v.active = 1
								   GROUP BY id_verre
                                   ORDER BY indice_verre, v.id_verre, id_grille_tarifaire
