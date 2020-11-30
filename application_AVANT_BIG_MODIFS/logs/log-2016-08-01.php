<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-08-01 10:24:51 --> Query error: Duplicate entry '52425-droit' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (52425, 'droit',178,'2016-08-01')
ERROR - 2016-08-01 10:24:51 --> Query error: Duplicate entry '52425-gauche' for key 'PRIMARY' - INSERT INTO etiquette (id_commande,cote,ordre,date_click) VALUES (52425, 'gauche',178,'2016-08-01')
ERROR - 2016-08-01 12:14:36 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 12:14:36 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 12:14:36 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 12:14:41 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 12:14:41 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 12:14:41 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 12:16:18 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 12:16:18 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 12:16:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 12:49:27 --> Severity: Notice  --> Undefined variable: envoi_chine /home/www/optieyescommande.com/htdocs/application/views/pdf/commande_stock_journaliere.php 17
ERROR - 2016-08-01 12:49:27 --> Severity: Notice  --> Undefined variable: envoi_chine /home/www/optieyescommande.com/htdocs/application/views/pdf/commande_stock_journaliere.php 25
ERROR - 2016-08-01 12:49:27 --> Severity: Notice  --> Undefined variable: commande_journaliere /home/www/optieyescommande.com/htdocs/application/views/pdf/commande_stock_journaliere.php 43
ERROR - 2016-08-01 12:53:21 --> Severity: Notice  --> Undefined variable: paiement /home/www/optieyescommande.com/htdocs/application/views/admin/payment_process.php 13
ERROR - 2016-08-01 13:12:42 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT grille_stock
                                   FROM grille_stock gs
                                   INNER JOIN verres v ON v.id_verre = gs.id_verre
                                   INNER JOIN grille_tarifaire gt ON v.id_verre = gt.id_verre
                                   WHERE id_generation_verre = 9 
                                   AND id_indice_verre =undefined 
                                   AND ACTIVE = 1
                                   AND gt.prix_verre > 0
                                   AND libelle_verre like '%Blanc%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%'
ERROR - 2016-08-01 13:12:42 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = 9 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Blanc%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-08-01 13:12:42 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT DISTINCT(diametre), grille_stock
								   FROM grille_stock gs
								   INNER JOIN verres v ON v.id_verre = gs.id_verre
								   WHERE id_generation_verre = 9 
								   AND id_indice_verre =undefined 
								   AND ACTIVE = 1 AND libelle_verre like '%Blanc%' AND libelle_verre not like '%G15 C%' AND libelle_verre not like '%Brun C%' AND libelle_verre not like '%Gris C%' AND libelle_verre not like '%PhotoGrey%' AND libelle_verre not like '%PhotoBrown%'
ERROR - 2016-08-01 13:22:27 --> Severity: Notice  --> Undefined variable: paiement /home/www/optieyescommande.com/htdocs/application/views/admin/payment_process.php 13
ERROR - 2016-08-01 13:22:28 --> Severity: Notice  --> Undefined variable: paiement /home/www/optieyescommande.com/htdocs/application/views/admin/payment_process.php 13
ERROR - 2016-08-01 13:23:21 --> Severity: Notice  --> Undefined variable: paiement /home/www/optieyescommande.com/htdocs/application/views/admin/payment_process.php 13
ERROR - 2016-08-01 13:24:18 --> Severity: Notice  --> Undefined variable: facture /home/www/optieyescommande.com/htdocs/application/views/admin/payment_process.php 13
ERROR - 2016-08-01 14:55:40 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 14:55:40 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 14:55:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 17:21:07 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 17:21:07 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 17:21:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:12:20 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 18:12:20 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:12:20 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:12:55 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 18:12:55 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:12:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:13:00 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 18:13:00 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:13:00 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:13:09 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 18:13:09 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:13:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:14:18 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-08-01 18:14:18 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-08-01 18:14:18 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
