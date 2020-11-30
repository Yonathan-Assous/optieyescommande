<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-06-15 10:02:36 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1209
ERROR - 2016-06-15 10:02:36 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1210
ERROR - 2016-06-15 10:02:36 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1211
ERROR - 2016-06-15 10:02:36 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1212
ERROR - 2016-06-15 10:02:36 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1213
ERROR - 2016-06-15 10:02:36 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1214
ERROR - 2016-06-15 10:02:36 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1215
ERROR - 2016-06-15 10:02:36 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1216
ERROR - 2016-06-15 10:02:36 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160615004,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-06-15 10:04:42 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:04:42 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:04:42 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:04:43 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:04:52 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:04:52 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:04:53 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =1 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:05:08 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =1 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-06-15 10:34:57 --> Query error: Duplicate entry '44133-droit' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (44133, 'droit',63,'2016-06-15')
ERROR - 2016-06-15 11:13:58 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-06-15 11:13:58 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-15 11:13:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-15 13:00:15 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:15 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:15 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:15 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:15 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:18 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:18 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:18 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:18 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:18 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:23 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:23 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:23 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:23 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:23 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:25 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:26 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:31 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:31 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:31 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:31 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:31 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:32 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:33 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:34 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:00:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:35 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:36 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:36 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:36 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:36 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:36 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:05:37 --> Severity: Notice  --> Undefined index: - /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 20
ERROR - 2016-06-15 13:25:16 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 515
ERROR - 2016-06-15 13:29:44 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:29:59 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:30:00 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:30:01 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:30:01 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:30:28 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:30:29 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:34:58 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:04 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:12 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:13 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:13 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:13 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:13 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:13 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:14 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:14 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:35:22 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:36:07 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:36:07 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:36:07 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:36:33 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:36:33 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:36:49 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:36:50 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:36:50 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 13:36:50 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 14:44:48 --> Severity: Notice  --> Undefined index: m /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 14:45:04 --> Severity: Notice  --> Undefined index: m /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 14:45:11 --> Severity: Notice  --> Undefined index: m /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 14:45:11 --> Severity: Notice  --> Undefined index: m /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 15:17:52 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1122
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1124
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-06-15 15:17:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-06-15 15:17:57 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1122
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1124
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-06-15 15:17:57 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:25 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:31 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:36 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:37 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:22:38 --> Severity: Notice  --> Undefined property: stdClass::$deleted /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1948
ERROR - 2016-06-15 15:42:48 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 515
ERROR - 2016-06-15 15:44:52 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1122
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1124
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-06-15 15:44:52 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-06-15 15:44:58 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1122
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1124
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-06-15 15:44:58 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-06-15 15:53:32 --> Severity: Notice  --> Undefined index: reference_client /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1214
ERROR - 2016-06-15 15:53:32 --> Severity: Notice  --> Undefined index: information_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1215
ERROR - 2016-06-15 15:53:32 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1216
ERROR - 2016-06-15 15:53:32 --> Severity: Notice  --> Undefined index: ancienne_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1217
ERROR - 2016-06-15 15:53:32 --> Severity: Notice  --> Undefined index: information_certificat /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1218
ERROR - 2016-06-15 15:53:32 --> Severity: Notice  --> Undefined index: taux_tva /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1219
ERROR - 2016-06-15 15:53:32 --> Severity: Notice  --> Undefined index: date_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1220
ERROR - 2016-06-15 15:53:32 --> Severity: Notice  --> Undefined index: date_update_commande /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1221
ERROR - 2016-06-15 15:53:32 --> Query error: Column count doesn't match value count at row 1 - INSERT INTO commande (intitule_bl) VALUES (160615103,NULL,NULL,0,0,NULL,NULL,NULL,NULL)
ERROR - 2016-06-15 15:54:27 --> Severity: Notice  --> Undefined variable: maxUser /home/www/optieyescommande.com/htdocs/application/views/admin/facture_client.php 66
ERROR - 2016-06-15 15:54:57 --> Severity: Notice  --> Undefined variable: maxUser /home/www/optieyescommande.com/htdocs/application/views/admin/facture_client.php 66
ERROR - 2016-06-15 16:01:44 --> Severity: Warning  --> implode(): Invalid arguments passed /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 762
ERROR - 2016-06-15 16:01:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
            GROUP BY c.id_users,date(date_update_commande)
            ORDER B' at line 31 - SELECT COALESCE(SUM(TarifLivraison), 0) + COALESCE(SUM(TarifLivraison2), 0) as tarif_liv, c.id_users, date_update_commande
            FROM commande c
            LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '06-2016' 
                AND tarif_livraison > 0 
                AND id_etat_commande = 6
                AND DATE_FORMAT(date_commande, '%m-%Y') = '06-2016' AND ( (date(date_update_commande) < '2015-07-19') OR (TIME(date_update_commande) >= '09:00:00' AND TIME(date_update_commande) < '16:00:00'))
                GROUP BY id_users,date(date_update_commande)
                ) as tarif_livr
            ON (
             c.id_commande = idCommande
            )
            LEFT JOIN (
                SELECT tarif_livraison as TarifLivraison2, id_commande as idCommande2
              FROM commande cc
              WHERE DATE_FORMAT(date_update_commande, '%m-%Y') = '06-2016'
              AND tarif_livraison > 0
              AND id_etat_commande = 6
              AND (date(date_update_commande) > '2015-07-19' AND DATE_FORMAT(date_commande, '%m-%Y') = '06-2016' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
              GROUP BY id_users,date(date_update_commande)
            ) as tarif_livr2
            ON (
              c.id_commande = idCommande2
            )
            WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '06-2016' 
            AND DATE_FORMAT(c.date_update_commande, '%m-%Y') = '06-2016'
            AND id_etat_commande = 6
            AND c.id_users NOT IN()
            GROUP BY c.id_users,date(date_update_commande)
            ORDER BY c.id_users ASC
ERROR - 2016-06-15 16:01:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
             AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2016'
             ' at line 33 - SELECT COALESCE(SUM(TarifLivraison),0) + COALESCE(SUM(TarifLivraison2),0) as tarif_liv, id_users, date_update_commande
             FROM commande c
             LEFT JOIN 
              ( 
                SELECT tarif_livraison as TarifLivraison, id_commande as idCommande
                FROM commande cc 
                WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='06-2016'
                AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2016'
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
                  WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='06-2016'
                  AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2016'
                  AND tarif_livraison > 0
                  AND id_etat_commande = 6
                  AND (date(date_update_commande) > '2015-07-19' AND (TIME(date_update_commande) < '09:00:00' OR TIME(date_update_commande) >= '16:00:00'))
                  GROUP BY id_users,date(date_update_commande)
               ) as tarif_livr2
               ON (
                  c.id_commande = idCommande2
               )
             WHERE DATE_FORMAT(date_update_commande, '%m-%Y')='06-2016'
             AND tarif_livraison > 0
             AND id_etat_commande = 6
             AND c.id_users NOT IN()
             AND DATE_FORMAT(date_commande, '%m-%Y') = '05-2016'
             GROUP BY id_users,date(date_update_commande)
             ORDER BY c.id_users
ERROR - 2016-06-15 16:01:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
          GROUP BY c.id_users
          ORDER BY c.id_users' at line 40 - SELECT COALESCE(total_stock, 0)  + COALESCE(total_fabrique, 0) - COALESCE(total_reductions, 0) as total,total_stock,total_fabrique, c.date_commande,c.id_users, COALESCE(total_reductions, 0) as reduction,cp,nom_magasin,id_grille_tarifaire,nom_societe,intitule_bl, 0 as tarif_liv
           FROM commande c
           INNER JOIN generation_verre gv ON gv.id_generation_verre = c.id_generation_verre
           INNER JOIN users u ON u.id_users = c.id_users
           LEFT JOIN
            (SELECT
                SUM(reduction) AS total_reductions,
                id_users as idusers,
                date_remise
            FROM
                facture_reduction
            WHERE DATE_FORMAT(date_remise, '%m-%Y') = '06-2016'
            GROUP BY id_users) AS reductions
           ON (
            c.id_users = idusers AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(date_remise, '%Y-%m')
           )
           LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_stock,id_users as idusersstock,date_commande
            FROM commande c
            WHERE id_type_generation_verre = 5 
            AND type_commande = 1
            AND DATE_FORMAT(date_commande, '%m-%Y') = '06-2016'
            GROUP BY idusersstock) as commande_stock
          ON (
              c.id_users = idusersstock AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_stock.date_commande, '%Y-%m')
          )
          LEFT JOIN 
          (SELECT 
            SUM(total_commande) as total_fabrique,id_users as idusersfabrique,date_commande
            FROM commande c
            WHERE id_type_generation_verre <> 5 
            AND type_commande = 1
            AND DATE_FORMAT(date_commande, '%m-%Y') = '06-2016'
            GROUP BY idusersfabrique) as commande_fabrique
          ON (
              c.id_users = idusersfabrique AND DATE_FORMAT(c.date_commande, '%Y-%m') = DATE_FORMAT(commande_fabrique.date_commande, '%Y-%m')
          )
          WHERE DATE_FORMAT(c.date_commande, '%m-%Y') = '06-2016'
          AND c.id_users NOT IN()
          GROUP BY c.id_users
          ORDER BY c.id_users
ERROR - 2016-06-15 16:51:02 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1131
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1133
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-06-15 16:51:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-06-15 16:51:07 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT * FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1131
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1133
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1055
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1082
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1153
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1245
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1581
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1618
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1655
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1659
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1862
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2061
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2130
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2167
ERROR - 2016-06-15 16:51:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2174
ERROR - 2016-06-15 17:32:18 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:20 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:20 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:20 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:20 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:21 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:21 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:21 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:21 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:21 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:21 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:21 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:30 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:32 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:32:51 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:03 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:05 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:05 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:05 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:06 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:12 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:13 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:13 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:13 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:14 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:30 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:31 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:31 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:31 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:31 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:31 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:41 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:33:56 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:00 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:00 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:00 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:00 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:00 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:01 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:01 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:01 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:01 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:01 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:02 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:02 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:02 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:02 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 17:34:02 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:41:08 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-06-15 18:41:08 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-15 18:41:08 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-15 18:54:37 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:38 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:40 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:42 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:45 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:46 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:50 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:50 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:50 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:50 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:51 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:51 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:51 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:52 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:52 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:52 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:52 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:54:59 --> Severity: Notice  --> Undefined offset: 17 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:55:41 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:55:42 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:55:42 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:55:43 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:56:31 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:56:33 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:56:33 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:56:33 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:56:33 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:56:33 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:56:34 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 18:56:34 --> Severity: Notice  --> Undefined offset: 76 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 19:29:30 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 19:29:33 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-15 19:30:00 --> Severity: Notice  --> Undefined offset: 42 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
