
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
    <section id="content" class="container_12 clearfix">
        <div class="grid_12">
            <div class="box">
                <div class="content">
                      <form method="post" action="ajout_verre">
                        <div style="width:150px;">
                          Generation verre :
                          <select id="id_generation_verre" name="id_generation_verre">
                            <option value="1">Horizon</option>
                            <option value="2">FIT</option>
                            <option value="3">IPL</option>
                            <option value="4">Acuform</option>
                            <option value="5">Intuition</option>
                            <option value="6">Top Office</option>
                            <option value="7">Verres Bifocaux</option>
                            <option value="8">Freestyle SV</option>
                            <option value="9">Unifocaux de stock</option>
                            <option value="10">Bifocal invisible</option>
                            <option value="11">EyeFatigue</option>
                          </select>
                        </div>
                        <br><br>
                        Indice verre :
                        <div style="width:150px;">
                          <select id="id_indice_verre" name="id_indice_verre">
                            <option value="1">1.50</option>
                            <option value="2">1.53</option>
                            <option value="3">1.56</option>
                            <option value="8">1.591</option>
                            <option value="4">1.60</option>
                            <option value="5">1.67</option>
                            <option value="6">1.74</option>
                            <option value="7">1.76</option>
                          </select>
                        </div>
                   <br><br>
                    
                        <input type="text" value="" name="libelle_verre" placeholder="libelle verre" width="300"/>
                    
                        <input type="submit" id="valider" value="Valider">
                    </form>
                </div>
            </div>
        </div><!-- End of .grid_4 -->
    </section><!-- End of #content -->
</div><!-- End of #main -->


<?php include_once('footer.php'); ?>

</body>
</html>