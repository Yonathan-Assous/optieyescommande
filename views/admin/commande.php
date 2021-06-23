
<?php include_once('header.php'); ?>
<body>

<!-- ----------------- -->
<!-- Some dialogs etc. -->

<?php include_once('content.php'); ?>

<!--  End of Add Client Example Dialog -->

<?php include_once('message.php'); ?>

<!--------------------------------->
<!-- Now, the page itself begins -->
<!--------------------------------->

<?php

include_once('toolbar.php');

include_once('header_bottom.php');

?>

<!-- The container of the sidebar and content box -->
<div role="main" id="main" class="container_12 clearfix">

<?php

include_once('toolbar_stripe.php');

include_once('menu.php');

?>
    <!-- Here goes the content. -->
    <section id="content" class="container_12 clearfix" data-sort=true>
        <div class="grid_12">
            <div class="box">
                <div class="header"><h2>Commande</h2></div>
                
                <div class="invoice">
                <?php
                  if($recap_commande !== false){
                      ?>
                      <h3>Commande N°<?php echo $recap_commande[0]->id_commande; ?></h3>
                      <div class="supplier">
                          <p>
                              <strong><?php echo $recap_commande[0]->nom_societe; ?></strong><br>
                              <?php echo $recap_commande[0]->nom_magasin; ?><br>
                              <?php echo $recap_commande[0]->adresse; ?><br>
                              <?php echo $recap_commande[0]->ville.' '.$recap_commande[0]->cp; ?>
                          </p>
                          <p>
                              <span>Email : </span> <?php echo $recap_commande[0]->email; ?><br>
                              <span>Téléphone : </span> <?php echo $recap_commande[0]->tel_fixe; ?><br>
                              <span>Fax : </span> <?php echo $recap_commande[0]->tel_fax; ?>
                          </p>
                      </div>

                      <div class="clearfix"></div>

                      <div class="details">
                          <div class="highlighted">
                              <span>Compte numéro : </span> <strong><?php echo $recap_commande[0]->id_users; ?></strong>
                          </div>
                          <div >
                              <span>Référence Client : </span> <strong><?php echo $recap_commande[0]->reference_client; ?></strong>
                          </div>
                          <div class="highlighted">
                              <span>Date : </span> <strong><?php echo $recap_commande[0]->date_commande; ?></strong>
                          </div>
                      </div>

                      <table class="styled borders" id="products">
                          <thead>
                          <tr>
                              <th>Verre</th>
                              <th>Description</th>
                              <th>Quantité</th>
                              <th>Total</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          $info_commande = json_decode($recap_commande[0]->information_commande,true);
                          $correction_droit = $correction_gauche = $info_c = $options = '';
                          $options_miroir = array(1 => 'Miroir Bleu', 2 => 'Miroir Argent', 3 => 'Miroir Doré', 4 => 'Miroir Vert', 5 => 'Miroir Rouge', 6 => 'Miroir Orange');

                          if(isset($info_commande['verre']['correction_droit']))
                              $correction_droit = 'Correction : <br> - Sphère : '.$info_commande['verre']['correction_droit']['sphere'].', Cylindre : '.$info_commande['verre']['correction_droit']['cylindre'].(isset($info_commande['verre']['correction_droit']['axe']) ? ', Axe : '.$info_commande['verre']['correction_droit']['axe'] : '').(isset($info_commande['verre']['correction_droit']['addition']) ? ', Addition : '.$info_commande['verre']['correction_droit']['addition'] : '').(isset($info_commande['verre']['correction_droit']['degression']) ? ', Degression : '.$info_commande['verre']['correction_droit']['degression'] : '').'<br>';

                          if(isset($info_commande['verre']['correction_gauche']))
                              $correction_gauche = 'Correction : <br> - Sphère : '.$info_commande['verre']['correction_gauche']['sphere'].', Cylindre : '.$info_commande['verre']['correction_gauche']['cylindre'].(isset($info_commande['verre']['correction_gauche']['axe']) ? ', Axe : '.$info_commande['verre']['correction_gauche']['axe'] : '').(isset($info_commande['verre']['correction_gauche']['addition']) ? ', Addition : '.$info_commande['verre']['correction_gauche']['addition'] : '').(isset($info_commande['verre']['correction_gauche']['degression']) ? ', Degression : '.$info_commande['verre']['correction_gauche']['degression'] : '').'<br>';

                          if(isset($info_commande['precalibrage']['calibre']))
                              $info_c = 'Précalibrage : '.$info_commande['precalibrage']['calibre'].'<br>';


                          if(isset($info_commande['diametre_verre']))
                              $info_c .= "Diamètre verre : ". $info_commande['diametre_verre']."<br>";

                          $info_c .= 'Mesure freeform : <br> - ';

                          if(isset($info_commande['mesure_freeform']['largeur_boxing']) || isset($info_commande['mesure_freeform']['hauteur_boxing']) || isset($info_commande['mesure_freeform']['hauteur_boxing']))
                              $info_c .= (isset($info_commande['mesure_freeform']['largeur_boxing']) ? 'Largeur boxing : '.$info_commande['mesure_freeform']['largeur_boxing'].', ' : '').(isset($info_commande['mesure_freeform']['hauteur_boxing']) ? 'Hauteur boxing : '.$info_commande['mesure_freeform']['hauteur_boxing'].', ' : '').(isset($info_commande['mesure_freeform']['taille_du_pont']) ? 'Taille du pont : '.$info_commande['mesure_freeform']['taille_du_pont'].', ' : '');

                          if(isset($info_commande['mesure_freeform']['diametre_utile']))
                              $info_c .=  'Diametre utile : '.$info_commande['mesure_freeform']['diametre_utile'].'<br>';

                          if(isset($info_commande['monture']['type']))
                              $info_c .= 'Type monture : '.$info_commande['monture']['type'].'<br>';

                          if(isset($info_commande['bord_verre']['epaisseur']) && !empty($info_commande['bord_verre']['epaisseur']))
                              $info_c .= 'EP au bord minimum : '.$info_commande['bord_verre']['epaisseur'].'<br>';


                          if(isset($info_commande['verre']['galbe']))
                              $options .= '- Galbe/base : '.$info_commande['verre']['galbe'].'<br>';

                          if(isset($info_commande['verre']['angle_pantoscopique']))
                              $options .= '- Angle pantoscopique : '.$info_commande['verre']['angle_pantoscopique'].'<br>';

                          if(isset($info_commande['verre']['angle_galbe']))
                              $options .= '- Angle de galbe : '.$info_commande['verre']['angle_galbe'].'<br>';

                          if(isset($info_commande['verre']['distance_verre_oeil']))
                              $options .= '- Distance verre oeil : '.$info_commande['verre']['distance_verre_oeil'].'<br>';

                          if(isset($info_commande['verre']['miroir']))
                              $options .= '- '.$options_miroir[$info_commande['verre']['miroir']['type_miroir']].' HMC face interne (+'.$info_commande['verre']['miroir']['prix_miroir'].'€)<br>';

                          if(!empty($options)){
                              $info_c .= 'Options : <br>';
                              $info_c .= $options;
                          }

                          if($correction_droit!=''){
                              $correction_droit .= $info_c;

                              if(isset($info_commande['verre']['hauteur']))
                                  $correction_droit .= ' Hauteur Droit : '.$info_commande['verre']['hauteur'].'<br>';

                              if(isset($info_commande['verre']['diametre']))
                                  $correction_droit .= 'Diametre : '.$info_commande['verre']['diametre'];

                              if(isset($info_commande['verre']['ecart_puppillaire']['droit']))
                                  $correction_droit .= ' Ecart pupillaire : '.$info_commande['verre']['ecart_puppillaire']['droit'];

                              if(isset($info_commande['verre']['dioptrie_droit']))
                                  $correction_droit .= '<br>Prisme : <br>- Dioptrie : '.$info_commande['verre']['dioptrie_droit'].' ';

                              if(isset($info_commande['verre']['base_droit']))
                                  $correction_droit .= 'Base : '.$info_commande['verre']['base_droit'].' Degrès';

                              if(isset($info_commande['precalibrage']['calibre']))
                                  $correction_droit .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';

                              $option_prix = 0;

                              if(isset($info_commande['verre']['miroir']['prix_miroir']))
                                  $option_prix += $info_commande['verre']['miroir']['prix_miroir'];


                              if(isset($info_commande['verre']['polarise'])){
                                  $recap_commande[0]->libelle_verre = str_replace("polarisé",$info_commande['verre']['polarise'],$recap_commande[0]->libelle_verre);
                              }

                              if(isset($info_commande['verre']['miroir_stock'])){
                                  $recap_commande[0]->libelle_verre  = str_replace("miroir",$options_miroir[$info_commande['verre']['miroir_stock']['type_miroir']],$recap_commande[0]->libelle_verre);
                              }


                              echo '<tr>';
								echo '<td>Verre oeil droit : '.$recap_commande[0]->libelle_verre.'</td>';
								echo '<td>'.$correction_droit.'</td>';
								echo '<td class="center">1</td>';
								echo '<td class="center">'.($recap_commande[0]->prix_verre+$option_prix).' €</td>';
                            echo '</tr>';
                        }

              if($correction_gauche!=""){
                $correction_gauche .= $info_c;
              
              if(isset($info_commande['verre']['hauteur_gauche']))
                $correction_gauche .= ' Hauteur : '.$info_commande['verre']['hauteur_gauche'].'<br>';
												
						  if(isset($info_commande['verre']['ecart_puppillaire']['gauche']))
                $correction_gauche .= ' Ecart pupillaire : '.$info_commande['verre']['ecart_puppillaire']['gauche'];
              
              if(isset($info_commande['verre']['dioptrie_gauche']))
                $correction_gauche .= '<br>Prisme : <br>- Dioptrie : '.$info_commande['verre']['dioptrie_gauche'].' ';

              if(isset($info_commande['verre']['base_gauche']))
                $correction_gauche .= 'Base : '.$info_commande['verre']['base_gauche'].' Degrès';
							
							if(isset($info_commande['precalibrage']['calibre']))
								$correction_gauche .= '<br><img src="/static/img/calibre/'.$info_commande['precalibrage']['calibre'].'.jpg" width="150" heigth="70" />';
							
							$correction_gauche .= (isset($info_commande['verre']['diametre_gauche']) ? 'Diametre : '.$info_commande['verre']['diametre_gauche'] : (isset($info_commande['verre']['diametre']) ? 'Diametre : '.$info_commande['verre']['diametre'] : ""));

							
							$option_prix = 0;
							
							if(isset($info_commande['verre']['miroir']['prix_miroir']))
								$option_prix += $info_commande['verre']['miroir']['prix_miroir'];
							
							echo '<tr>';
								echo '<td>Verre oeil gauche : '.$recap_commande[0]->libelle_verre.'</td>';
								echo '<td>'.$correction_gauche.'</td>';
								echo '<td class="center">1</td>';
								echo '<td class="center">'.($recap_commande[0]->prix_verre+$option_prix).' €</td>';
							echo '</tr>';
                        }
?>
                        </tbody>
                    </table>

                     <?php

                      if($recap_commande[0]->type_commande > 1) {

                          echo '<div class="total final"><span>Total final</span><strong>0 €</strong></div>';
                          echo '<div class="total"><span>Total</span><strong><del>'.$recap_commande[0]->total_commande.' €</del></strong></div>';


                      }
                      else {
                          echo '<div class="total"><span>Total</span><strong>'.$recap_commande[0]->total_commande.' €</strong></div>';
                      }

                      ?>

                    <div class="clearfix"></div>

					<?php 
						if(!empty($recap_commande[0]->commentaire))
							echo '<div class="notes">
									<h5>Commentaire :</h5>
									<p>'.$recap_commande[0]->commentaire.'</p>
								  </div>';
					?>

              <?php
                  }
                  else{
                    echo '<div style="height:150px;text-align:center;"><p style="padding-top:50px">Cette commande n\'existe pas ! </p></div>';
                  }
                ?>
                </div><!-- End of .content -->

            </div><!-- End of .box -->
        </div><!-- End of .grid_4 -->
    </section><!-- End of #content -->

</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>