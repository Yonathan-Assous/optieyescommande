
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
                <div class="content"><br><br>
                  <div style="width:500px">
                    <?php echo form_open_multipart('admin/do_upload');?>
                      <select name="grille">
                        <option value="1">Grille 1</option>
                        <option value="2">Grille 2</option>
                        <option value="3">Grille 3</option>
                      </select>
                      <br><br><br>
                      <input type="file" name="new_file" size="20" />
                      <br><br>
                      <input type="submit" value="Mettre à jour" />
                      <?php
                        if(isset($error)){
                          echo "<p style='color:red'>Une erreur est survenue !</p>";
                        } else if(isset($upload_data)){
                          echo "<p style='color:green'>Fichier mise à jour !</p>";
                        }
                      ?>
                    </form>
                    <br><br>
                  </div>
                </div>
            </div>
        </div><!-- End of .grid_4 -->
    </section><!-- End of #content -->
</div><!-- End of #main -->

<?php include_once('footer.php'); ?>

</body>
</html>