<!-- The blue toolbar stripe -->
<section class="toolbar">
    <div class="user">
        <div class="avatar">
            <img src="<?php echo $pre_url;?>static/img/layout/content/toolbar/user/avatar.png">
            <!--span>3</span-->
        </div>
        <span>
            <?php
                $max = 21;

                if(ctype_upper($user_info->nom_societe))
                    $max = 16;

                if(strlen($user_info->nom_societe) >$max)
                    $user_info->nom_societe = substr($user_info->nom_societe,0,$max)."..";

                echo $user_info->nom_societe;
            ?>
        </span>
        <ul>
            <li><a href="<?php echo $pre_url;?>index/profile" class="restriction">Profile</a></li>
            <li class="line"></li>
            <li><a href="<?php echo $pre_url;?>index/logout">Se déconnecter</a></li>
        </ul>
    </div>

    <input type="search" data-source="extras/search.php" placeholder="Rechercher..." autocomplete="off" class="tooltip" title="e.g. Peach" data-gravity=s>
</section><!-- End of .toolbar-->