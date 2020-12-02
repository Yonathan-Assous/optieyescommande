<!-- The blue toolbar stripe -->
<section class="toolbar">
    <div class="user">
        <div class="avatar">
            <img src="<?php echo $pre_url;?>static/img/layout/content/toolbar/user/avatar.png">
            <!--span>3</span-->
        </div>
        <span>Admin</span>
        <ul>
            <li><a href="<?php echo $pre_url;?>admin/profile">Profile</a></li>
            <li class="line"></li>
            <li><a href="<?php echo $pre_url;?>index/logout">Se déconnecter</a></li>
        </ul>
    </div>

    <ul class="shortcuts"> 
        <li>
            <!-- a href="#" class="tooltip" original-title="Envoi des commandes de fabrication" data-gravity="s" data-anim="true"><span class="icon i24_inbox-document" id="send_commande_journa"></span></a -->
            <a href="#" id="send_commande_journa"><img width="40" src="static/img/Israel.png" style="margin-top:-40px"></a>
        </li>
        <li>
            <!-- a href="#" class="tooltip" original-title="Envoi des commandes de fabrication" data-gravity="s" data-anim="true"><span class="icon i24_inbox-document" id="send_commande_journa"></span></a -->
            <a href="#" id="send_commande_journa_stock"><img width="40" src="static/img/drapeau_fr.png" style="margin-top:-40px"></a>
        </li>
		<!--li>
            <a href="#" class="tooltip" original-title="Envoi des commandes de stock" data-gravity="s" data-anim="true"><span class="icon i24_inbox-document" id="send_commande_journa_stock"></span></a>
        </li>
        <!--li>
            <a href="#" class="tooltip" original-title="Changer le taux de TVA" data-gravity="s" data-anim="true"><span class="icon i24_application-blue" id="param_tva"></span></a>
        </li -->
		<!--li>
            <a href="/admin/generer_emargement" class="tooltip" original-title="Generer Emargement" data-gravity="s" data-anim="true"><span class="icon i24_document-text"></span></a>
        </li -->
		
        <li>
            <a href="#" class="tooltip" original-title="Generer etiquette stock" data-gravity="s" data-anim="true" id="print_etiquette"><span class="icon i24_table" ></span></a>
        </li>
        <li>
            <a href="#" class="tooltip" original-title="Generer etiquette fabrication" data-gravity="s" data-anim="true" id="print_etiquette_fabrication"><span class="icon i24_fab" ></span></a>
        </li>
        <li style="float: right">
            <a href="#" class="tooltip" original-title="Envoi email" data-gravity="s" data-anim="true"><span class="icon i24_mail" id="send_mail_customer_btn"></span></a>
        </li>
      <!-- li>
          <a href="#" class="tooltip" original-title="Mise à jour documents téléchargeable" data-gravity="s" data-anim="true"><span class="icon i24_document-import" id="send_document_btn"></span></a>
      </li -->
    </ul><!-- End of .shortcuts -->
	
</section><!-- End of .toolbar-->