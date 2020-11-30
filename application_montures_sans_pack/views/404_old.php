<?php include_once('header.php'); ?>

<body>

    <!-- ----------------- -->
    <!-- Some dialogs etc. -->

    <?php

     include_once('content.php');

     include_once('message.php');

    ?>

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
			<div class="big error">
			
				<div class="big">				
					<h2>Cette page n'existe pas...</h2>
					<h1>404</h1>
				</div>
				
				<div class="small">
				
					<span>
						Désolé, un problème est survenu.
					</span>
					<span>
						La page demandée n'a pas été trouvé !
					</span>
					<a href="<?php echo $pre_url; ?>" class="button grey">Retour en page d'accueil</a>
					
				</div><!-- End of .small -->
				
			</div><!-- End of .error -->
        </section><!-- End of #content -->
        
    </div><!-- End of #main -->

    <?php include_once('footer.php'); ?>

</body>
</html>