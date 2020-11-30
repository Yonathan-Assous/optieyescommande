<?php
    $pre_url ="/current/";
    $version = md5("version3");
    $maintenance = false;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Optieyescommande est un site pour les opticiens qui souhaitent trouver les meilleurs verres pour leurs clients à des prix défiant toute concurrence.">
    <meta name="author" content="Proxicommerce">

    <link rel="shortcut icon" href="<?php echo $pre_url;?>static/assets/images/favicon.png">

    <title><?php echo $title ?></title>

    <link href="<?php echo $pre_url;?>static/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/elements.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/tooltipster.core.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/tooltipster.bundle.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $pre_url;?>static/assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $pre_url;?>static/assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />

    <?php
        if(isset($modules)) {

            if(array_key_exists('datatables', $modules)) {
                echo '<link href="/static/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />';
                echo '<link href="/static/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />';
                echo '<link href="/static/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />';
                echo '<link href="/static/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />';
                echo '<link href="/static/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />';
            }

            if(array_key_exists('touchspin', $modules)) {
                echo '<link href="/static/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />';
            }


        }
    ?>


    <script src="<?php echo $pre_url;?>static/assets/js/jquery.min.js"></script>
    <script src="<?php echo $pre_url;?>static/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $pre_url;?>static/assets/js/detect.js"></script>
    <script src="<?php echo $pre_url;?>static/assets/js/fastclick.js"></script>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo $pre_url;?>static/assets/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

<?php if($page != 'Connexion') : ?>
<div id="wrapper">
    <div class="topbar">

        <div class="topbar-left">
            <div class="text-center">
                <a href="<?php echo $pre_url;?>index" class="desktop-logo">
                    <img src="/static/img/logo-white-mobile.png" class="icon-c-logo" />
                </a>
                <span>
                    <a href="<?php echo $pre_url;?>index" class="logo">
                        <img src="/static/img/logo-white.png" alt="logo" style="height: 36px;">
                    </a>
                </span>
            </div>
        </div>


        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">

                    <div class="pull-left">
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>


                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="dropdown user-box m-r-5">
                            <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                                <i class="zmdi zmdi-settings m-r-5"></i> Mon compte
                            </a>

                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $pre_url;?>index/profile" class="restrict"><i class="ti-settings m-r-5"></i> Paramètres</a></li>
                                <li><a href="<?php echo $pre_url;?>index/logout"><i class="ti-power-off m-r-5"></i> Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
<?php endif; ?>
<?php /*
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <meta charset="utf-8">

    <link rel="dns-prefetch" href="http://fonts.googleapis.com" />
    <link rel="dns-prefetch" href="http://themes.googleusercontent.com" />

    <link rel="dns-prefetch" href="http://ajax.googleapis.com" />
    <link rel="dns-prefetch" href="http://cdnjs.cloudflare.com" />
    <link rel="dns-prefetch" href="http://agorbatchev.typepad.com" />

    <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php echo $title; ?></title>
    <meta name="description" content="Optieyescommande est un site pour les opticiens qui souhaitent trouver les meilleurs verres pour leurs clients à des prix défiant toute concurrence.">

    <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <!-- iPhone: Don't render numbers as call links -->
    <meta name="format-detection" content="telephone=no">

    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

    <!-- The Styles -->
    <!-- ---------- -->

    <!-- Layout Styles -->
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/style.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/grid.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/layout.css">

    <!-- Icon Styles -->
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/icons.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/fonts/font-awesome.css">
    <!--[if IE 8]><link rel="stylesheet" href="<?php echo $pre_url;?>static/css/fonts/font-awesome-ie7.css"><![endif]-->

    <!-- External Styles -->
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/jquery-ui-1.9.1.custom.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/jquery.chosen.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/jquery.cleditor.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/jquery.colorpicker.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/jquery.elfinder.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/jquery.jgrowl.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/jquery.plupload.queue.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/syntaxhighlighter/shCore.css" />
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/external/syntaxhighlighter/shThemeDefault.css" />

    <!-- Elements -->
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/elements.css">
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/forms.css">

    <!-- OPTIONAL: Print Stylesheet for Invoice -->
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/print-invoice.css">

    <!-- Typographics -->
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/typographics.css">

    <!-- Responsive Design -->
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/media-queries.css">

    <!-- Bad IE Styles -->
    <link rel="stylesheet" href="<?php echo $pre_url;?>static/css/ie-fixes.css">


    <!-- The Scripts -->
    <!-- ----------- -->

    <!-- JavaScript at the top (will be cached by browser) -->


    <!-- Grab frameworks from CDNs -->
        <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js?v=<?php echo $version; ?>"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $pre_url;?>static/js/libs/jquery-1.8.2.js?v=<?php echo $version; ?>"><\/script>')</script>

        <!-- Do the same with jQuery UI -->
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js?v=<?php echo $version; ?>"></script>
    <script>window.jQuery.ui || document.write('<script src="<?php echo $pre_url;?>static/js/libs/jquery-ui-1.9.1.js?v=<?php echo $version; ?>"><\/script>')</script>

        <!-- Do the same with Lo-Dash.js -->
    <!--[if gt IE 8]><!-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.8.2/lodash.js?v=<?php echo $version; ?>"></script>
    <script>window._ || document.write('<script src="<?php echo $pre_url;?>static/js/libs/lo-dash.js?v=<?php echo $version; ?>"><\/script>')</script>
    <!--<![endif]-->
    <!-- IE8 doesn't like lodash -->
    <!--[if lt IE 9]><script src="http://documentcloud.github.com/underscore/underscore.js?v=<?php echo $version; ?>"></script><![endif]-->

    <!-- Do the same with require.js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/require.js/2.0.6/require.js?v=<?php echo $version; ?>"></script>
    <script>window.require || document.write('<script src="<?php echo $pre_url;?>static/js/libs/require-2.0.6.min.js?v=<?php echo $version; ?>"><\/script>')</script>


    <!-- Load Webfont loader -->
    <script type="text/javascript">
        window.WebFontConfig = {
            google: { families: [ 'PT Sans:400,700' ] },
            active: function(){ $(window).trigger('fontsloaded') }
        };
    </script>
    <script defer async src="https://ajax.googleapis.com/ajax/libs/webfont/1.0.28/webfont.js?v=<?php echo $version; ?>"></script>

    <!-- Essential polyfills -->
    <script src="<?php echo $pre_url;?>static/js/mylibs/polyfills/modernizr-2.6.1.min.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/polyfills/respond.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/polyfills/matchmedia.js?v=<?php echo $version; ?>"></script>
    <!--[if lt IE 9]><script src="<?php echo $pre_url;?>static/js/mylibs/polyfills/selectivizr.js?v=<?php echo $version; ?>"></script><![endif]-->
    <!--[if lt IE 10]><script src="<?php echo $pre_url;?>static/js/mylibs/polyfills/excanvas.js?v=<?php echo $version; ?>"></script><![endif]-->
    <!--[if lt IE 10]><script src="<?php echo $pre_url;?>static/js/mylibs/polyfills/classlist.js?v=<?php echo $version; ?>"></script><![endif]-->


    <!-- scripts concatenated and minified via build script -->

    <!-- Scripts required everywhere -->
    <script src="<?php echo $pre_url;?>static/js/mylibs/jquery.hashchange.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/jquery.idle-timer.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/jquery.plusplus.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/jquery.scrollTo.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/jquery.ui.touch-punch.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/jquery.ui.multiaccordion.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/number-functions.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/fullstats/jquery.css-transform.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/fullstats/jquery.animate-css-rotate-scale.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/mylibs/forms/jquery.validate.js?v=<?php echo $version; ?>"></script>

    <!-- Do not touch! -->
    <script src="<?php echo $pre_url;?>static/js/mango.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/plugins.js?v=<?php echo $version; ?>"></script>
    <script src="<?php echo $pre_url;?>static/js/script.js?v=<?php echo $version; ?>"></script>

    <!-- Your custom JS goes here -->
    <script src="<?php echo $pre_url;?>static/js/app.js?v=<?php echo $version; ?>"></script>

    <!-- end scripts -->

    <script>
		function blink(){
			var x;
			setInterval(function() {
					if(x == 0) {
						$('.blinking').removeAttr('style');
						x = 1;
					} else  {
						if(x = 1) {
							$('.blinking').css('color', 'red');
							x = 0;
						}
					}
			}, 500);
		}

        $$.ready(function() {
			$("#info_numero_magasin").css({
				'fontSize' : '34px'
			});

            $("#logout").click(function(){
                $.ajax({
                    type: "POST",
                    url: '<?php echo $pre_url; ?>'+"index/logout",
                    success: function(msg){
                        window.location.reload();
                    }
                });
                return false;
            });

            $$.settings.save = function(ready, formData){
                var dataObj = {};

                jQuery.each(formData[1], function(i, field){
                    dataObj[field.name] = field.value;
                });

                $.ajax({
                    type: "POST",
                    url: dataObj['action'],
                    data : dataObj,
                    dataType : "json",
                    success: function(msg){
                        if(msg.status == "error_siret"){
                            $("#msg_incorrect_siret").dialog( "open" );
                            $("#settings .right .saving").hide();
                            $("#settings .right .save").show();
                        }
                        else if(msg.status == "error_tva_intra_comm"){
                            $("#msg_incorrect_tva_intra_comm").dialog( "open" );
                            $("#settings .right .saving").hide();
                            $("#settings .right .save").show();
                        }
                        else{
                            window.location.reload();
                        }
                    }
                });
            }

            $$.registry.tooltips();

            $("#error_numero_finess_empty,#error_numero_finess,#success_numero_finess,#msg_ie_users,#msg_incorrect_siret,#msg_incorrect_tva_intra_comm,#siret_exist").dialog({
                autoOpen: false,
                modal: true,
                buttons: [{
                    text: "Ok",
                    click: function() {
                        $(this).dialog("close");
                    }
                }]
            });

            $(".restriction").click(function(){

                var href = $(this).attr("href");

                $.ajax({
                    type: "POST",
                    url: '<?php echo $pre_url; ?>'+"index/getRestriction",
                    success: function(restriction){
                        if(restriction == 1){
                            $("#restriction #restriction_redirect").val(href);
                            $("#restriction #error_restriction").hide()
                            $("#restriction").dialog("open");
                        }
                        else
                            window.location.href = href;
                    }
                });

                return false;
            });


            $("#restriction").dialog({
                autoOpen: false,
                modal: true,
                buttons: [{
                    text: "Ok",
                    click: function() {
                        var dial = $(this), url = $("#restriction #restriction_redirect").val();
                        $("#error_restriction").fadeOut();
                        $.ajax({
                            type: "POST",
                            data: "restriction_pass="+$("#restriction #restriction_pass").val(),
                            url: '<?php echo $pre_url; ?>'+"index/verif_restriction",
                            success: function(verif){
                                if(verif == "ok"){
                                    dial.dialog("close");
                                    window.location.href = url;
                                }else
                                    $("#error_restriction").fadeIn();
                            }
                        });
                    }
                }]
            });

			$("#main nav #catalogue_electronique").click(function(){
				$("#msg_catalogue_electronique").dialog("open");

				return false;
			});

			$("#msg_catalogue_electronique").dialog({
				autoOpen: false,
				modal: true,
				buttons: [{
					text: "Ok",
					click: function() {
						$(this).dialog("close");
						window.location.href = $("#main nav #catalogue_electronique").attr('href');
					}
				}]
			});

            $('.maskTvaIntra').mask('FR99999999999');

			blink();

			if(typeof jQuery.fn.dataTableExt !== 'undefined')
				jQuery.fn.dataTableExt.oApi.fnReloadAjax = function ( oSettings, sNewSource, fnCallback, bStandingRedraw )
				{
					// DataTables 1.10 compatibility - if 1.10 then `versionCheck` exists.
					// 1.10's API has ajax reloading built in, so we use those abilities
					// directly.
					if ( jQuery.fn.dataTable.versionCheck ) {
						var api = new jQuery.fn.dataTable.Api( oSettings );

						if ( sNewSource ) {
							api.ajax.url( sNewSource ).load( fnCallback, !bStandingRedraw );
						}
						else {
							api.ajax.reload( fnCallback, !bStandingRedraw );
						}
						return;
					}

					if ( sNewSource !== undefined && sNewSource !== null ) {
						oSettings.sAjaxSource = sNewSource;
					}

					// Server-side processing should just call fnDraw
					if ( oSettings.oFeatures.bServerSide ) {
						this.fnDraw();
						return;
					}

					this.oApi._fnProcessingDisplay( oSettings, true );
					var that = this;
					var iStart = oSettings._iDisplayStart;
					var aData = [];

					this.oApi._fnServerParams( oSettings, aData );

					oSettings.fnServerData.call( oSettings.oInstance, oSettings.sAjaxSource, aData, function(json) {

						that.oApi._fnClearTable( oSettings );


						var aData =  (oSettings.sAjaxDataProp !== "") ?
							that.oApi._fnGetObjectDataFn( oSettings.sAjaxDataProp )( json ) : json;

						for ( var i=0 ; i<aData.length ; i++ )
						{
							that.oApi._fnAddData( oSettings, aData[i] );
						}

						oSettings.aiDisplay = oSettings.aiDisplayMaster.slice();

						that.fnDraw();

						if ( bStandingRedraw === true )
						{
							oSettings._iDisplayStart = iStart;
							that.oApi._fnCalculateEnd( oSettings );
							that.fnDraw( false );
						}

						that.oApi._fnProcessingDisplay( oSettings, false );


						if ( typeof fnCallback == 'function' && fnCallback !== null )
						{
							fnCallback( oSettings );
						}
					}, oSettings );
				};
        });
    </script>
</head> */ ?>