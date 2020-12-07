<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta	http-equiv="Content-Type"	content="charset=utf-8" />
    <link rel="STYLESHEET" href="static/css/print_static.css" type="text/css" />
</head>

<body>

<div id="body">

    <div id="section_header">
    </div>

    <div id="content">

        <div class="page" style="font-size: 7pt">
			<table style="width: 100%;">
                <tr>
					<td style="text-align:center;"><img src="static/img/logo.jpg" width="227" heigth="72" /></td>
                </tr>
            </table>
			<br><br>
            <table style="width: 100%;" class="header">
                <tr>
                    <td style="text-align: center;"><h1>Colis livrés en date du <?php echo date('d/m/Y'); ?></h1></td>
                </tr>
            </table>
			
			<?php
				$compteur = 0;
				$maxParPage = 3;
				$departement = "";
				
				if($commandes !== false){
					foreach($commandes as $commande){
						$dep = substr($commande->cp, 0,2);
						
						
						if($compteur == $maxParPage || ($departement != "" && $departement != $dep)){
							echo '<div style="page-break-before: always;"></div>';
							$compteur = 0;
							$maxParPage = 4;
						}
						
						if($departement != $dep){
							$departement = $dep;
						
						echo   '<table style="width: 100%;">
									<tr>
										<td style="text-align: right;">'.$departement.'</td>
									</tr>
								</table>';
						}
						
						echo '<table class="change_order_items">
								<tbody>
									<tr>
										<th style="width:60px;text-align:center">Numéro magasin</th>
										<th style="width:190px;text-align:center">Magasin</th>
										<th style="width:80px;text-align:center">Nombre commande</th>
										<th style="width:270px;text-align:center">Tampon</th>
									</tr>
									<tr>
										<td style="text-align:center;height:120px">'.$commande->id_users.'</td>
										<td style="text-align:center;">'.$commande->nom_magasin.'<br><br>'.$commande->adresse.'<br>'.$commande->cp.'<br><b>'.$commande->ville.'</b><br><br>'.$commande->tel_fixe.'</td>
										<td style="text-align:center;">'.$commande->nombre_commande.'</td>
										<td></td>
									</tr>
								</tbody>
							 </table>';
							 
						$compteur++;
					}
				}
			?>
        </div>

    </div>
</div>

</body>
</html>