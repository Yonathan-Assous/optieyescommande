
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
    <div id="info_user" title="Informations Magasin" style="display:none"></div>
    <!-- Here goes the content. -->
    <section id="content" class="container_12 clearfix">
        <div class="grid_12">
            <div class="box">
                <div class="content">
                    <div style="width:80px;float:left;">
                      Année
                      <select id="annee_variation">
                        <option value=""></option>
                        <?php
                          $annee_actuelle = date('Y');
                          for($annee = 2013;$annee <= $annee_actuelle;$annee++){
                            echo '<option value="'.$annee.'">'.$annee.'</option>';
                          }
                        ?>
                      </select>&nbsp;&nbsp;&nbsp;
                    </div>
                    <div style="width:120px;float:left;margin-left:40px">
                       Numéro magasin
                      <select id="numero_magasin">
                        <option value=""></option>
                        <?php
                          for($user = 3;$user <= $maxUser;$user++){
                            echo '<option value="'.$user.'">'.$user.'</option>';
                          }
                        ?>
                      </select>
                    </div>

                    <br><br>
                    <table id="tab" class="styled">
                       
                    </table>
                </div>
            </div>
        </div><!-- End of .grid_4 -->
    </section><!-- End of #content -->
</div><!-- End of #main -->

<script>
  $("#content").on("change","#annee_variation,#numero_magasin", function(){ 
    if($("#annee_variation").val()!="")
      $.ajax({
          type: "POST",
          url: "/admin/variations_facture_clients_ajax",
          data : "annee="+$("#annee_variation").val()+"&numero_magasin="+$("#numero_magasin").val(),
          success: function(data){
              $("#tab").append().html(data);
          }
      }); 
  });

  $("#content").on("click","table .info_user",function(){
      $.ajax({
          type: "POST",
          url: $(this).attr('href'),
          beforeSend: function(){
              $("#info_user").dialog("open");
              $("#info_user").empty().append(loading);
          },
          success: function(data){
              $("#info_user").empty().append(data);
          }
      });

      return false;
  });

  $("#info_user").dialog({
      autoOpen: false,
      modal: true,
      resizable: false,
      width: 370,
      show: {
          effect: "blind",
          duration: 500
      },
      hide: {
          effect: "blind",
          duration: 500
      }
  });
</script>

<?php include_once('footer.php'); ?>

</body>
</html>