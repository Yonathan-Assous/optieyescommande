<footer class="footer">
    2020 © Optieyes
</footer>

</div>

<?php include('layout/commandes.php'); ?>
<?php include('layout/restrict.php'); ?>

<?php if(1 == 2 ) { ?>
<!-- Right Sidebar -->
<div class="side-bar right-bar">
    <a href="javascript:void(0);" class="right-bar-toggle">
        <i class="zmdi zmdi-close-circle-o"></i>
    </a>
    <h4 class="">Notifications</h4>
    <div class="notification-list nicescroll">
        <ul class="list-group list-no-border user-list">
            <li class="list-group-item">
                <a href="#" class="user-list-item">
                    <div class="icon">
                        <i class="zmdi zmdi-account"></i>
                    </div>
                    <div class="user-desc">
                        <span class="name">New Signup</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">5 hours ago</span>
                    </div>
                </a>
            </li>
            <li class="list-group-item">
                <a href="#" class="user-list-item">
                    <div class="icon">
                        <i class="zmdi zmdi-comment"></i>
                    </div>
                    <div class="user-desc">
                        <span class="name">New Message received</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">1 day ago</span>
                    </div>
                </a>
            </li>
            <li class="list-group-item active">
                <a href="#" class="user-list-item">
                    <div class="icon">
                        <i class="zmdi zmdi-settings"></i>
                    </div>
                    <div class="user-desc">
                        <span class="name">Settings</span>
                        <span class="desc">There are new settings available</span>
                        <span class="time">1 day ago</span>
                    </div>
                </a>
            </li>

        </ul>
    </div>
</div>
<!-- /Right-bar -->
<?php } ?>


</div>
<!-- END wrapper -->

<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="<?php echo $pre_url;?>static/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/waves.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/tooltipster.core.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/tooltipster.bundle.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/plugins/toastr/toastr.min.js"></script>

<script src="<?php echo $pre_url;?>static/assets/plugins/waypoints/lib/jquery.waypoints.js"></script>
<script src="<?php echo $pre_url;?>static/assets/plugins/counterup/jquery.counterup.min.js"></script>

<script src="<?php echo $pre_url;?>static/assets/js/jquery.core.js"></script>
<script src="<?php echo $pre_url;?>static/assets/js/jquery.app.js"></script>

<script src="<?php echo $pre_url;?>static/assets/plugins/select2/dist/js/select2.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>
<script src="<?php echo $pre_url;?>static/assets/plugins/switchery/switchery.min.js"></script>

<?php

if(isset($modules)) {

    if(array_key_exists('datepicker', $modules)) {
        echo '<script src="static/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>';
        echo '<script src="static/assets/plugins/bootstrap-datepicker/dist/locales/bootstrap-datepicker.fr.min.js"></script>';
    }

    if(array_key_exists('touchspin', $modules)) {
        echo '<script src="static/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>';
    }
    

}
?>

</body>
</html>

<?php /*
<footer class="container_12">

    <div style="display: none;" id="restriction" title="Entrez votre mot de passe">
        <input type="hidden" value="" id="restriction_redirect" />
        <label>Mot de passe : </label><input type="password" value="" name="pass_restriction" id="restriction_pass" /><br>
        <div id="error_restriction" style="color: red;text-align:center;margin-top:5px;display: none;">Erreur de mot de passe</div>
    </div>
	
	 <div style="display: none;" id="msg_catalogue_electronique" title="Information catalogue électronique">
        <div>
			Merci de bien vouloir contacter le service client de votre logiciel et lui fournir le fichier que vous êtes sur le point de télécharger, pour qu'il puisse vous intégrer notre catalogue Optimize sur votre logiciel d'opticien.
		</div>
    </div>

    <?php
        include_once('message_error.php');
    ?>
    <ul class="grid_6">
       
    </ul>

        <span class="grid_12" style="text-align:center">
            Copyright &copy; <?php echo date('Y'); ?>
        </span>
</footer>
<!-- End of footer -->

<!-- Spawn $$.loaded -->
<script>
    $$.loaded();
</script>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
   chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script defer src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]--> */ ?>