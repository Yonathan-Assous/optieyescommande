<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-05-24 10:45:42 --> Severity: Notice  --> Undefined offset: 2 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 443
ERROR - 2016-05-24 10:45:42 --> Severity: Notice  --> Undefined offset: 1 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 443
ERROR - 2016-05-24 11:10:01 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-05-24 11:10:01 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-05-24 11:10:01 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-05-24 12:50:59 --> The filetype you are attempting to upload is not allowed.
ERROR - 2016-05-24 13:00:51 --> Severity: Warning  --> Invalid argument supplied for foreach() /home/www/optieyescommande.com/htdocs/application/controllers/index.php 776
ERROR - 2016-05-24 17:55:37 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-05-24 17:55:37 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-05-24 17:55:37 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-05-24 18:44:39 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-05-24 18:44:39 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-05-24 18:44:39 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-05-24 18:44:46 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-05-24 18:44:46 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-05-24 18:44:46 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-05-24 18:44:46 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-05-24 18:44:49 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%HMC%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
