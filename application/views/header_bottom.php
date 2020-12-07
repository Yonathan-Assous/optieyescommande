<!-- The header containing the logo -->
<header class="container_12">

    <!-- Your logos -->
    <a href="<?php echo $pre_url;?>index"><img src="<?php echo $pre_url;?>static/img/logo.png?v=<?php echo $version; ?>" alt="Optieyes commande" width="228" height="73" style="margin-left: 45px;"></a>
    <a class="phone-title" href="profile"><img src="<?php echo $pre_url;?>static/img/logo-mobile.png" alt="Crystal commande" height="22" width="70" /></a>

	<div id="info_numero_magasin" style="font-size:34px;position:absolute; top:8% ;margin-left:40%;">
      Je suis le magasin Numéro <span style="color:#FFCB08"><?php echo $user_info->id_users; ?></span><br><br>
  </div>
  <div id="info_assistance_tel" style="font-size:20px;position:absolute; top:49% ;margin-left:42%;">
       Assitance Téléphonique : 09 83 65 35 85
  </div>
  <div id="info_commercial" style="font-size:20px;position:absolute; top:67% ;margin-left:39%;">
      Votre commercial M. ZIBI Samuel : 06 66 83 15 36
  </div>
  
 
	
    <!--div class="buttons">
        <a href="statistics.html">
            <span class="icon icon-sitemap"></span>
            Statistics
        </a>
        <a href="forms.html">
            <span class="icon icon-list-alt"></span>
            Forms
        </a>
        <a href="tables_dynamic.html">
            <span class="icon icon-table"></span>
            Tables
        </a>
    </div--><!-- End of .buttons -->
</header><!-- End of header -->