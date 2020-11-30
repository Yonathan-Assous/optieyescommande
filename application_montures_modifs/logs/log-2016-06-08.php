<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-06-08 10:38:10 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-06-08 10:38:10 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 10:38:10 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 11:45:22 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-06-08 11:45:22 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 11:45:22 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 11:49:13 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-06-08 11:49:13 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 11:49:13 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 12:11:23 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-06-08 12:11:23 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 12:11:23 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 12:13:55 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-06-08 12:13:55 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 12:13:55 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 14:08:42 --> Severity: Notice  --> Undefined variable: TarifLiv /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1122
ERROR - 2016-06-08 14:08:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
								   -
								  (SELECT IFNULL(SUM(reduction),0) as reduction FROM fact' at line 4 - SELECT (SELECT IFNULL(SUM(total_commande),0) as ca_journalier FROM commande
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='2016-06' AND type_commande = 1)
                                   +
                                   ()
								   -
								  (SELECT IFNULL(SUM(reduction),0) as reduction FROM facture_reduction fr
								   WHERE DATE_FORMAT(date_remise, '%Y-%m') = '2016-06') as ca
ERROR - 2016-06-08 14:08:42 --> Severity: Notice  --> Undefined variable: TarifLiv /home/www/optieyescommande.com/htdocs/application/models/m_commande.php 1122
ERROR - 2016-06-08 14:08:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')
								   -
								  (SELECT IFNULL(SUM(reduction),0) as reduction FROM fact' at line 4 - SELECT (SELECT IFNULL(SUM(total_commande),0) as ca_journalier FROM commande
                                   WHERE DATE_FORMAT(date_commande, '%Y-%m')='2016-06' AND type_commande = 1)
                                   +
                                   ()
								   -
								  (SELECT IFNULL(SUM(reduction),0) as reduction FROM facture_reduction fr
								   WHERE DATE_FORMAT(date_remise, '%Y-%m') = '2016-06') as ca
ERROR - 2016-06-08 15:05:45 --> Severity: Notice  --> Undefined index: id /home/www/optieyescommande.com/htdocs/application/controllers/index.php 192
ERROR - 2016-06-08 15:05:45 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 15:05:45 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/index.php 198
ERROR - 2016-06-08 18:11:09 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib,valid_mandat,commande_suspendue,restriction_compte,id_grille_tarifaire,grille_telechargeable,show_commentaire,taux_erreur,tarif_livraison,nom_responsable
                                   FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1051
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1053
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1058
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1085
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1156
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1248
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1584
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1658
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1662
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1865
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2064
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2133
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2170
ERROR - 2016-06-08 18:11:09 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2177
