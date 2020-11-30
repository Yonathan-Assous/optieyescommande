<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-04-20 11:01:01 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT v.id_verre,libelle_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre
                                   FROM verres v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE id_generation_verre IN(undefined) AND v.id_indice_verre=undefined
                                   AND v.active = 1
								   GROUP BY id_verre
                                   ORDER BY indice_verre,v.id_verre
ERROR - 2016-04-20 11:01:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-04-20 11:01:02 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:03 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = undefined 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-04-20 11:01:04 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = undefined 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Satin%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
