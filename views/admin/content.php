<!-- The loading box -->
<div id="loading-overlay"></div>
<div id="loading">
    <span>Chargement...</span>
</div>
<!-- End of loading box -->

<!-- The lock screen -->
<div id="lock-screen" title="Screen Locked">

    <a href="login.html" class="header right button grey flat">Logout</a>

    <p>Due to the inactivity of this session, your account was temporarily locked.</p>
    <p>To unlock your account, simply slide the button and enter your password.</p>

    <div class="actions">
        <div id="slide_to_unlock">
            <img src="<?php echo $pre_url;?>static/img/elements/slide-unlock/lock-slider.png" alt="slide me">
            <span>Faire glisser pour débloquer</span>
        </div>
        <form action="#" method="GET">
            <input type="password" name="pwd" id="pwd" placeholder="Entrer votre mot de passe..." autocorrect="off" autocapitalize="off"> <input type="submit" name="send" value="Débloquer" disabled> <input type="reset" value="X">
        </form>
    </div><!-- End of .actions -->

</div><!-- End of lock screen -->