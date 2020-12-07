<!-- The toolbar at the top -->
<section id="toolbar">
    <div class="container_12">

        <!-- Left side -->
        <div class="left">
            <ul class="breadcrumb">

                <li><a href="index">Optieyes Commande</a></li>
                <li><a href="javascript:void(0);"><?php echo $page; ?></a></li>
                <!--li><a href="javascript:void(0);">Profile</a></li-->

            </ul>
        </div>
        <!-- End of .left -->

        <!-- Right side -->
        <div class="right">
            <ul>

                <li><a href="<?php echo $pre_url;?>index/profile" class="restriction"><span class="icon i14_admin-user"></span>Profile</a></li>


                <li class="space"></li>

                <li class="red"><a href="<?php echo $pre_url;?>index/logout" id="logout">Se déconnecter</a></li>

            </ul>
        </div><!-- End of .right -->

        <!-- Phone only items -->
        <div class="phone">

            <!-- User Link -->
            <li><a href="<?php echo $pre_url;?>index/profile" class="restriction"><span class="icon icon-user"></span></a></li>
            <!-- Navigation -->
            <li><a class="navigation" href="#"><span class="icon icon-list"></span></a></li>

        </div><!-- End of phone items -->

    </div><!-- End of .container_12 -->
</section>
<!-- End of #toolbar -->