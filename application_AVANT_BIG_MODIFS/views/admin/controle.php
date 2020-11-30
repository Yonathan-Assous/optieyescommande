
<?php include_once('header.php'); ?>
<body>

<!-- ----------------- -->
<!-- Some dialogs etc. -->

<?php include_once('content.php'); ?>

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
                <div class="header">
                    <h2><img class="icon" src="<?php echo $pre_url;?>static/img/icons/packs/fugue/16x16/table.png"><?php echo $page; ?></h2>
                </div>
                <div class="content">
                    <div class="tabletools">
                        <div class="left">
                        </div>
                        <div class="right">
                        </div>
                    </div>
                    <table id="tab_ec" class="mes_commandes styled">
                        <thead>
                        <tr>
                            <th>Contrôle</th>
                            <th>J-6</th>
                            <th>J-5</th>
                            <th>J-4</th>
                            <th>J-3</th>
                            <th>J-2</th>
                            <th>J-1</th>
                            <th>Jour</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mail commande chine</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Génération PDF chine</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>