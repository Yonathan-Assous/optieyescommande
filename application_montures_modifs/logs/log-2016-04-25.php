<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

ERROR - 2016-04-25 18:44:32 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:44:33 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:44:40 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:44:40 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:44:43 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:44:44 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:44:47 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 2 ORDER BY c.id_commande DESC
ERROR - 2016-04-25 18:44:50 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:44:51 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:44:57 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:44:58 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:45:09 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:45:10 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:45:16 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:45:17 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:45:23 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:45:23 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:45:33 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 2 ORDER BY c.id_commande DESC
ERROR - 2016-04-25 18:45:56 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:45:57 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:45:59 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:45:59 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:46:16 --> Query error: Unknown column 'information_certificat' in 'field list' - INSERT INTO commande (origine_commande, type_commande, reference_client, id_type_generation_verre, id_generation_verre, id_indice_verre, id_verre, id_users, id_etat_commande, date_commande, date_update_commande, taux_tva, tarif_livraison, information_certificat, information_commande, prix_verre, total_commande, intitule_bl) VALUES (1,1,'yousfi',4,8,4,2307,140,1,'2016-04-25 18:46:13','2016-04-25 18:46:13','1.2',8.0,'','{\"precalibrage\":{\"calibre\":\"calibre3\"},\"mesure_freeform\":{\"largeur_boxing\":\"55\",\"hauteur_boxing\":\"39\",\"taille_du_pont\":\"15\",\"diametre_utile\":\"53\"},\"monture\":{\"type\":\"Plastique\"},\"bord_verre\":{\"epaisseur\":\"1.00\"},\"verre\":{\"correction_droit\":{\"sphere\":\"2\",\"cylindre\":\"2\",\"axe\":\"25\"},\"correction_gauche\":{\"sphere\":\"3.25\",\"cylindre\":\"1.25\",\"axe\":\"170\"},\"hauteur\":\"17.5\",\"hauteur_gauche\":\"17.5\",\"ecart_puppillaire\":{\"droit\":\"27\",\"gauche\":\"29\"}}}',23.00,46,160425149)
ERROR - 2016-04-25 18:46:19 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:46:20 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:46:45 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/controllers/index.php 148
ERROR - 2016-04-25 18:46:50 --> Query error: Unknown column 'information_certificat' in 'field list' - INSERT INTO commande (type_commande, reference_client, id_type_generation_verre, id_generation_verre, id_indice_verre, id_verre, id_users, id_etat_commande, date_commande, date_update_commande, origine_commande, taux_tva, tarif_livraison, information_certificat, information_commande, prix_verre, total_commande, intitule_bl) VALUES (1,'RHEZRANI',5,9,1,3181,137,1,'2016-04-25 18:46:45','2016-04-25 18:46:45',0,'1.2',8.0,'','{\"verre\":{\"correction_droit\":{\"sphere\":\"0.5\",\"cylindre\":\"0.25\"},\"correction_gauche\":{\"sphere\":\"0.5\",\"cylindre\":\"0.25\"},\"diametre\":\"65\",\"diametre_gauche\":\"65\",\"traitement\":\"Satin\",\"photocromie\":\"Non Photocromique\"}}',3.50,7,160425149)
ERROR - 2016-04-25 18:46:50 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_commande,id_users,information_certificat,date_commande
                               FROM commande c
                               INNER JOIN etiquette e ON e.id_commande=c.id_commande
                               WHERE date_click <= '2016-04-25'
                               AND id_etat_commande < 6
                               AND (c.id_type_generation_verre <> 5 OR c.id_indice_verre = 6 OR c.id_generation_verre = 14)
                               GROUP BY c.id_commande
                               ORDER BY ordre
ERROR - 2016-04-25 18:46:51 --> Query error: Unknown column 'information_certificat' in 'field list' - SELECT c.id_users,c.id_commande,date_commande,c.id_etat_commande,reference_client,libelle_etat_commande,date_update_commande,date_pointage,commentaire,type_commande,intitule_bl,indice_verre,information_commande,information_certificat,total_commande,cp,date_annule
                                   FROM commande c
                                   INNER JOIN users u ON c.id_users = u.id_users
                                   INNER JOIN etat_commande ec ON c.id_etat_commande = ec.id_etat_commande
                                   INNER JOIN type_generation_verre tgv ON tgv.id_type_generation_verre = c.id_type_generation_verre
                                   INNER JOIN indice_verre iv ON iv.id_indice_verre = c.id_indice_verre
                                   LEFT JOIN commande_commentaire cc ON cc.id_commande = c.id_commande
                                   LEFT JOIN commande_pointage cp ON cp.id_commande = c.id_commande
                                   WHERE c.id_etat_commande < 6 AND id_magasin = 1 ORDER BY date_commande DESC
ERROR - 2016-04-25 18:47:37 --> Severity: Notice  --> Undefined index: origine_commande /home/www/optieyescommande.com/htdocs/application/controllers/index.php 148
ERROR - 2016-04-25 18:47:47 --> Query error: Unknown column 'information_certificat' in 'field list' - INSERT INTO commande (type_commande, reference_client, id_type_generation_verre, id_generation_verre, id_indice_verre, id_verre, id_users, id_etat_commande, date_commande, date_update_commande, origine_commande, taux_tva, tarif_livraison, information_certificat, information_commande, prix_verre, total_commande, intitule_bl) VALUES (1,'AMROUN MAYES TOV',5,9,1,3178,78,1,'2016-04-25 18:47:37','2016-04-25 18:47:37',0,'1.2',8.0,'','{\"verre\":{\"correction_droit\":{\"sphere\":\"-2\",\"cylindre\":\"3.5\"},\"correction_gauche\":{\"sphere\":\"-2\",\"cylindre\":\"3.5\"},\"diametre\":\"65\",\"diametre_gauche\":\"65\",\"traitement\":\"Blanc\",\"photocromie\":\"Non Photocromique\",\"teinte\":\"Non Teint\\u00e9\"}}',0.60,1.2,160425149)
ERROR - 2016-04-25 18:47:58 --> Query error: Unknown column 'information_certificat' in 'field list' - INSERT INTO commande (origine_commande, type_commande, reference_client, id_type_generation_verre, id_generation_verre, id_indice_verre, id_verre, id_users, id_etat_commande, date_commande, date_update_commande, taux_tva, tarif_livraison, information_certificat, information_commande, prix_verre, total_commande, intitule_bl) VALUES (2,1,'RHEZRANI',5,9,1,3181,137,1,'2016-04-25 18:47:55','2016-04-25 18:47:55','1.2',8.0,'','{\"verre\":{\"correction_droit\":{\"sphere\":\"0.5\",\"cylindre\":\"0.25\"},\"correction_gauche\":{\"sphere\":\"0.5\",\"cylindre\":\"0.25\"},\"diametre\":\"65\",\"diametre_gauche\":\"65\",\"traitement\":\"Satin\",\"photocromie\":\"Non Photocromique\"}}',3.50,7,160425149)
ERROR - 2016-04-25 18:48:10 --> Query error: Unknown column 'information_certificat' in 'field list' - INSERT INTO commande (origine_commande, type_commande, reference_client, id_type_generation_verre, id_generation_verre, id_indice_verre, id_verre, id_users, id_etat_commande, date_commande, date_update_commande, taux_tva, tarif_livraison, information_certificat, information_commande, prix_verre, total_commande, intitule_bl) VALUES (1,1,'test premier',1,5,4,13225,2,1,'2016-04-25 18:48:05','2016-04-25 18:48:05','1.2',8.0,'{\"civilite_client\":\"1\",\"nom_client\":\"Calmant\",\"prenom_client\":\"Jeanne\"}','{\"precalibrage\":{\"calibre\":\"calibre3\"},\"mesure_freeform\":{\"largeur_boxing\":\"12\",\"hauteur_boxing\":\"45\",\"taille_du_pont\":\"54\",\"diametre_utile\":\"45\"},\"monture\":{\"type\":\"Metal\"},\"bord_verre\":{\"epaisseur\":\"0,3\"},\"verre\":{\"correction_droit\":{\"sphere\":\"-1.25\",\"cylindre\":\"0.75\",\"axe\":\"3\",\"addition\":\"0.75\"},\"correction_gauche\":{\"sphere\":\"-1.25\",\"cylindre\":\"1\",\"axe\":\"2\",\"addition\":\"0.75\"},\"hauteur\":\"31\",\"hauteur_gauche\":\"65\",\"ecart_puppillaire\":{\"droit\":\"65\",\"gauche\":\"98\"},\"galbe\":\"8\",\"dioptrie_droit\":\"0.25\",\"base_droit\":\"1\",\"dioptrie_gauche\":\"1.5\",\"base_gauche\":\"31\",\"miroir\":{\"type_miroir\":\"3\",\"prix_miroir\":6}}}',54.00,120,160425149)
ERROR - 2016-04-25 18:48:30 --> Query error: Unknown column 'information_certificat' in 'field list' - INSERT INTO commande (origine_commande, type_commande, reference_client, id_type_generation_verre, id_generation_verre, id_indice_verre, id_verre, id_users, id_etat_commande, date_commande, date_update_commande, taux_tva, tarif_livraison, information_certificat, information_commande, prix_verre, total_commande, intitule_bl) VALUES (2,1,'AMROUN MAYES TOV',5,9,1,3178,78,1,'2016-04-25 18:48:28','2016-04-25 18:48:28','1.2',8.0,'','{\"verre\":{\"correction_droit\":{\"sphere\":\"-2\",\"cylindre\":\"3.5\"},\"correction_gauche\":{\"sphere\":\"-2\",\"cylindre\":\"3.5\"},\"diametre\":\"65\",\"diametre_gauche\":\"65\",\"traitement\":\"Blanc\",\"photocromie\":\"Non Photocromique\",\"teinte\":\"Non Teint\\u00e9\"}}',0.60,1.2,160425149)
ERROR - 2016-04-25 18:48:35 --> Query error: Unknown column 'information_certificat' in 'field list' - INSERT INTO commande (origine_commande, type_commande, reference_client, id_type_generation_verre, id_generation_verre, id_indice_verre, id_verre, id_users, id_etat_commande, date_commande, date_update_commande, taux_tva, tarif_livraison, information_certificat, information_commande, prix_verre, total_commande, intitule_bl) VALUES (2,1,'chirard ',5,9,1,3178,27,1,'2016-04-25 18:48:33','2016-04-25 18:48:33','1.2',10.0,'','{\"verre\":{\"correction_droit\":{\"sphere\":\"2\",\"cylindre\":\"0\"},\"correction_gauche\":{\"sphere\":\"2\",\"cylindre\":\"0\"},\"diametre\":\"65\",\"diametre_gauche\":\"65\",\"traitement\":\"Blanc\",\"photocromie\":\"Non Photocromique\",\"teinte\":\"Non Teint\\u00e9\"}}',0.60,1.2,160425149)
ERROR - 2016-04-25 18:48:39 --> Query error: Unknown column 'information_certificat' in 'field list' - INSERT INTO commande (origine_commande, type_commande, reference_client, id_type_generation_verre, id_generation_verre, id_indice_verre, id_verre, id_users, id_etat_commande, date_commande, date_update_commande, taux_tva, tarif_livraison, information_certificat, information_commande, prix_verre, total_commande, intitule_bl) VALUES (2,1,'BELARIBI',5,9,1,3178,173,1,'2016-04-25 18:48:36','2016-04-25 18:48:36','1.2',8.0,'','{\"verre\":{\"correction_droit\":{\"sphere\":\"-1.5\",\"cylindre\":\"1.5\"},\"diametre\":\"65\",\"traitement\":\"Blanc\",\"photocromie\":\"Non Photocromique\",\"teinte\":\"Non Teint\\u00e9\"}}',0.60,0.60,160425149)
ERROR - 2016-04-25 18:59:56 --> Severity: Warning  --> require_once(): open_basedir restriction in effect. File(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php) is not within the allowed path(s): (/home/www/optieyescommande.com/htdocs/:/home/www/optieyescommande.com/tmp/uploads/:/tmp/) /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 18:59:56 --> Severity: Warning  --> require_once(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php): failed to open stream: Operation not permitted /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:06:34 --> Severity: Warning  --> require_once(): open_basedir restriction in effect. File(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php) is not within the allowed path(s): (/home/www/optieyescommande.com/htdocs/:/home/www/optieyescommande.com/tmp/uploads/:/tmp/) /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:06:34 --> Severity: Warning  --> require_once(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php): failed to open stream: Operation not permitted /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:08:06 --> Severity: Warning  --> require_once(): open_basedir restriction in effect. File(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php) is not within the allowed path(s): (/home/www/optieyescommande.com/htdocs/:/home/www/optieyescommande.com/tmp/uploads/:/tmp/) /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:08:06 --> Severity: Warning  --> require_once(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php): failed to open stream: Operation not permitted /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:10:32 --> Severity: Warning  --> require_once(): open_basedir restriction in effect. File(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php) is not within the allowed path(s): (/home/www/optieyescommande.com/htdocs/:/home/www/optieyescommande.com/tmp/uploads/:/tmp/) /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:10:32 --> Severity: Warning  --> require_once(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php): failed to open stream: Operation not permitted /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:11:12 --> Severity: Warning  --> require_once(): open_basedir restriction in effect. File(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php) is not within the allowed path(s): (/home/www/optieyescommande.com/htdocs/:/home/www/optieyescommande.com/tmp/uploads/:/tmp/) /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:11:12 --> Severity: Warning  --> require_once(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php): failed to open stream: Operation not permitted /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:11:23 --> Severity: Warning  --> require_once(): open_basedir restriction in effect. File(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php) is not within the allowed path(s): (/home/www/optieyescommande.com/htdocs/:/home/www/optieyescommande.com/tmp/uploads/:/tmp/) /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:11:23 --> Severity: Warning  --> require_once(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php): failed to open stream: Operation not permitted /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:11:31 --> Severity: Warning  --> require_once(): open_basedir restriction in effect. File(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php) is not within the allowed path(s): (/home/www/optieyescommande.com/htdocs/:/home/www/optieyescommande.com/tmp/uploads/:/tmp/) /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:11:31 --> Severity: Warning  --> require_once(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php): failed to open stream: Operation not permitted /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:15:41 --> Severity: Warning  --> require_once(): open_basedir restriction in effect. File(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php) is not within the allowed path(s): (/home/www/optieyescommande.com/htdocs/:/home/www/optieyescommande.com/tmp/uploads/:/tmp/) /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
ERROR - 2016-04-25 19:15:41 --> Severity: Warning  --> require_once(/home/www/devproxi.optieyescommande.com/htdocs/static/dompdf/lib/html5lib/Parser.php): failed to open stream: Operation not permitted /home/www/optieyescommande.com/htdocs/static/dompdf/autoload.inc.php 19
