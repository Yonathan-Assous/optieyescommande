<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-06-06 11:51:25 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT v.id_verre,libelle_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre
                                   FROM verres v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE id_generation_verre IN(undefined) AND v.id_indice_verre=undefined
                                   AND v.active = 1
								   GROUP BY id_verre
                                   ORDER BY indice_verre,v.id_verre
ERROR - 2016-06-06 11:51:26 --> Query error: Unknown column 'undefined' in 'where clause' - SELECT v.id_verre,libelle_verre,id_grille_tarifaire,prix_verre,indice_verre,order_verre
                                   FROM verres v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   INNER JOIN indice_verre iv ON v.id_indice_verre=iv.id_indice_verre
                                   WHERE id_generation_verre IN(undefined) AND v.id_indice_verre=undefined
                                   AND v.active = 1
								   GROUP BY id_verre
                                   ORDER BY indice_verre,v.id_verre
ERROR - 2016-06-06 16:17:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 997
ERROR - 2016-06-06 16:17:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 998
ERROR - 2016-06-06 16:17:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:17:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:17:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1000
ERROR - 2016-06-06 16:17:30 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib,valid_mandat,commande_suspendue,restriction_compte,id_grille_tarifaire,grille_telechargeable,show_commentaire,taux_erreur,tarif_livraison,nom_responsable
                                   FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1042
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1044
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 997
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 998
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1000
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1058
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1085
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1156
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1248
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1584
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1658
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1662
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1865
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2064
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2133
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2170
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2177
ERROR - 2016-06-06 16:17:30 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib,valid_mandat,commande_suspendue,restriction_compte,id_grille_tarifaire,grille_telechargeable,show_commentaire,taux_erreur,tarif_livraison,nom_responsable
                                   FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1042
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1044
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 997
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 998
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1000
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1058
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1085
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1156
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1248
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1584
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1658
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1662
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1865
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2064
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2133
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2170
ERROR - 2016-06-06 16:17:30 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2177
ERROR - 2016-06-06 16:18:00 --> Severity: Notice  --> Undefined index: id_users /home/www/optieyescommande.com/htdocs/application/models/m_verres.php 63
ERROR - 2016-06-06 16:18:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ') as vgp
                                   ON (
                               ' at line 8 - SELECT v.id_verre,libelle_verre,prix_verre,libelle_verre_personnalise
                                   FROM verres v
                                   INNER JOIN grille_tarifaire gt ON v.id_verre=gt.id_verre
                                   LEFT JOIN (
                                            SELECT id_generation_verre,libelle_verre_personnalise
                                            FROM verres_generation_personnalise
                                            WHERE id_users = 
                                   ) as vgp
                                   ON (
                                    v.id_generation_verre = vgp.id_generation_verre
                                   )
                                   WHERE v.id_generation_verre=8
                                   AND id_indice_verre=6
                                   AND id_grille_tarifaire=3
                                   AND prix_verre >0
                                   AND active = 1
                                   
ERROR - 2016-06-06 16:24:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 997
ERROR - 2016-06-06 16:24:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 998
ERROR - 2016-06-06 16:24:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:24:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:24:27 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1000
ERROR - 2016-06-06 16:24:29 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib,valid_mandat,commande_suspendue,restriction_compte,id_grille_tarifaire,grille_telechargeable,show_commentaire,taux_erreur,tarif_livraison,nom_responsable
                                   FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1042
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1044
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 997
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 998
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1000
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1058
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1085
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1156
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1248
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1584
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1658
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1662
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1865
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2064
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2133
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2170
ERROR - 2016-06-06 16:24:29 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2177
ERROR - 2016-06-06 16:24:40 --> Severity: Notice  --> Undefined index: user_info /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1376
ERROR - 2016-06-06 16:24:40 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1376
ERROR - 2016-06-06 16:25:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 997
ERROR - 2016-06-06 16:25:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 998
ERROR - 2016-06-06 16:25:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:25:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:25:59 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1000
ERROR - 2016-06-06 16:26:02 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib,valid_mandat,commande_suspendue,restriction_compte,id_grille_tarifaire,grille_telechargeable,show_commentaire,taux_erreur,tarif_livraison,nom_responsable
                                   FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1042
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1044
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 997
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 998
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 999
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1000
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1058
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1085
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1156
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1248
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1584
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1658
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1662
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1865
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2064
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2133
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2170
ERROR - 2016-06-06 16:26:02 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2177
ERROR - 2016-06-06 16:28:07 --> Query error: Unknown column 'favicon.ico' in 'where clause' - SELECT id_users,numero_siret,nom_societe,nom_magasin,adresse,cp,ville,tel_fixe,tel_fax,tva_intracom,num_finess,email,pass,document_rib,valid_document_rib,valid_mandat,commande_suspendue,restriction_compte,id_grille_tarifaire,grille_telechargeable,show_commentaire,taux_erreur,tarif_livraison,nom_responsable
                                   FROM users WHERE id_users=favicon.ico
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1042
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Undefined offset: 0 /home/www/optieyescommande.com/htdocs/application/controllers/admin.php 1044
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 49
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 150
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1058
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1085
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1156
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1248
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1584
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1621
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1658
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1662
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 1865
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2064
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2133
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2170
ERROR - 2016-06-06 16:28:07 --> Severity: Notice  --> Trying to get property of non-object /home/www/optieyescommande.com/htdocs/application/views/admin/passer_commande.php 2177
ERROR - 2016-06-06 17:28:40 --> Severity: Notice  --> Undefined offset: 20 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-06 17:28:43 --> Severity: Notice  --> Undefined offset: 20 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-06 17:28:57 --> Severity: Notice  --> Undefined offset: 20 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-06 17:28:58 --> Severity: Notice  --> Undefined offset: 20 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
ERROR - 2016-06-06 17:28:59 --> Severity: Notice  --> Undefined offset: 20 /home/www/optieyescommande.com/htdocs/system/helpers/slimpay_helper.php 12
