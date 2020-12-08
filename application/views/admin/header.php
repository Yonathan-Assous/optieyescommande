<?php $pre_url ="/";
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
    <link href="<?php echo $pre_url;?>static/assets/css/admin.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/tooltipster.core.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/css/tooltipster.bundle.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/plugins/custombox/dist/custombox.min.css" rel="stylesheet">
    
    <link href="<?php echo $pre_url;?>static/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $pre_url;?>static/assets/plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $pre_url;?>static/assets/plugins/select2/dist/css/select2-bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $pre_url;?>static/assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css" />

    <?php
    if(isset($modules)) {

        if(array_key_exists('datatables', $modules)) {
            echo ' <link href="/static/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
            <link href="/static/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="/static/assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="/static/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
            <link href="/static/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />';
        }

        if(array_key_exists('sweetalert', $modules)) {
            echo '<link href="/static/assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css" />';
        }

        if(array_key_exists('datepicker', $modules)) {
            echo '<link href="/static/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css" rel="stylesheet">
            <link href="/static/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">';
        }

        if(array_key_exists('touchspin', $modules)) {
            echo '<link href="/static/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />';
        }

        if(array_key_exists('multiselect', $modules)) {
            echo '<link href="/static/assets/plugins/multiselect/css/multi-select.css"  rel="stylesheet" type="text/css" />';
        }


    }
    ?>


    <script src="<?php echo $pre_url;?>static/assets/js/jquery.min.js"></script>
    <script src="<?php echo $pre_url;?>static/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $pre_url;?>static/assets/js/detect.js"></script>
    <script src="<?php echo $pre_url;?>static/assets/js/fastclick.js"></script>
    <script src="<?php echo $pre_url;?>static/assets/plugins/switchery/switchery.min.js"></script>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo $pre_url;?>static/assets/js/modernizr.min.js"></script>

</head>

<body class="fixed-left">

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
                            <a href="<?php echo $pre_url ?>admin/profile" class="waves-effect waves-light profile">
                                <i class="ti-settings m-r-5"></i> Paramètres
                            </a>

                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </div>

    <script>

        var check = true;

        window.setInterval(function(){
            if(check){
                $.ajax({
                    type: "POST",
                    url: "/admin/checkNewOrder",
                    dataType: 'json',
                    beforeSend: function(){
                        check = false;
                    },
                    success: function(data){
                        if(data.son != ""){
                            if($('#audio').length == 0){
                                $('<audio id="audio" width="300" height="32"><source src="" type="audio/mp3" /></audio>').appendTo('body');
                            }

                            var pre = '<?php echo $pre_url;?>';

                            $("#audio").find('source').attr('src', pre+'static/audio/audio'+data.son+'.mp3');

                            $("#audio")[0].play();
                            toastr["warning"]("Une nouvelle commande vient d'être passée.");

                            /*if(typeof isRechargeable !="undefined" && isRechargeable == true)
                                table.dataTable().fnReloadAjax();*/
                        }

                        check = true;
                    },
                    error: function(){
                        check = true;
                    }
                });
            }
        },20000);
    </script>

    <?php /*
    <script>
        var type_optique = "";
        
        $("body").on("click","button[id^=button_nouvel_intitule_]",function(e) {
          var commentaire = $(this).parent().parent().find('.icon:eq(0)').parent().attr('original-title');
          
          $("#id_nouvelle_date_bl").val($(this).attr('id').split('_')[3]);
          $("#id_users_nouveau_bl").val($(this).attr('id').split('_')[4]);
          
          $(".show_commentaire_modif_bl").html(commentaire);
          
          $("#show_verre_lentille").dialog('open');
        });
        
        $("body").on("change","input[name=type_optique]",function(e) {
          type_optique = $(this).val();
        });
        
        $$.ready(function() {
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
                    success: function(){
                       window.location.reload();
                    }
                });
            }

            $("#send_commande_journa").click(function(){
				$("#type_commande_to_send").val(1);
                $("#confirm_send_commande_journa").dialog("open");
				
				return false;
            });
			
			$("#send_commande_journa_stock").click(function(){
				$("#type_commande_to_send").val(2);
                $("#confirm_send_commande_journa").dialog("open");
				
				return false;
            });

            $("#confirm_send_commande_journa").dialog({
                autoOpen: false,
                modal: true,
                resizable: false,
                width: 300,
                buttons: {
                    "Annuler": function() {
                        $(this).dialog( "close" );
                    },
                    "Envoyer les commandes": function() {
                        $.ajax({
                            type: "POST",
                            url: "/cron/generation_pdf_commande_journaliere/1/"+$("#type_commande_to_send").val(),
							beforeSend: function(){
								$("#loading_send_commande_journa").show();
                            },
                            success: function(data){
								$("#loading_send_commande_journa").hide();
								$("#confirm_send_commande_journa").dialog("close");
								if(data == "no_order")
									$("#error_send_no_order").dialog("open");
								else{
									$("#success_send_commande_journa").dialog("open");
								}
                            }
                        });
                    }
                },
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "blind",
                    duration: 500
                }
            });
			
			$("#send_mail_customer").dialog({
                autoOpen: false,
                modal: true,
                width: 800,
                buttons: [{
                    text: "Envoyer",
                    click: function() {
						if(uploadFile == false){
							$.ajax({
								type: "POST",
								url: "/admin/send_mail_customer",
								data : $("#form_mail_customer").serialize(),
								success: function(data){
								  $("#send_mail_customer").dialog("close");
								}
							});
						}
						else
							return false;
                    }
                }]
            });
            
          
      var files = "";
      var progressLabel = $("#progress-label-document");
      var progressbar = $('#progress_document').progressbar({ 
          change: function() {
          progressLabel.text( progressbar.progressbar( "value" ) + " %" );
        }
      });
      
      $("#send_document_downloadable").on("change","#nouveau_document", function(e){
          files = e.target.files;
          progressbar.progressbar( "option", {value: 0});
          $("#msg_progress_document").text('');
      });
      
      $("#send_document_downloadable").dialog({
        autoOpen: false,
        modal: true,
        width: 450,
        buttons: {
            "Annuler": function() {
                $(this).dialog("close");
            },
            "Mettre à jour": function(e) {
              if(files !=""){
                $("#progressbar").fadeOut();
                
                var document = $("#document").val();
                var grille_document = $("#grille_document").val();
                e.stopPropagation();
                e.preventDefault();
                
                var data = new FormData();
                $.each(files, function(key, value){
                  data.append('new_file_rib', value);
                });
                
                progressbar.progressbar( "option", {value: 0});
                
                $("#msg_progress_document").text('Ajout du document en cours...');
                $("#progressbar_document").fadeIn();
                $.ajax({
                  xhr: function(){
                    if(window.ActiveXObject){
                      return new window.ActiveXObject("Microsoft.XMLHTTP");
                    }else{
                       var xhr = new window.XMLHttpRequest();
                        //Upload progress
                        xhr.upload.addEventListener("progress_document", function(evt){
                        if (evt.lengthComputable) {
                          var percentComplete = Math.ceil((evt.loaded / evt.total) * 100);
                           progressbar.progressbar( "option", {value: percentComplete});
                         }
                       }, false);
                       //Download progress
                       xhr.addEventListener("progress_document", function(evt){
                         if (evt.lengthComputable) {
                         var percentComplete = Math.ceil((evt.loaded / evt.total) * 100);
                         progressbar.progressbar( "option", {value: percentComplete});
                         }
                       }, false);
                    }
                    return xhr;
                  },
                  url: '/admin/upload_new_document?document='+document+'&grille_document='+grille_document,
                  type: 'POST',
                  data: data,
                  cache: false,
                  dataType: 'json',
                  processData: false,
                  contentType: false,
                  success: function(data, textStatus, jqXHR){	
                    if(typeof data.error === 'undefined') {
                       progressbar.progressbar( "option", {value: 100});
                       $("#msg_progress").text('Nouveau document ajouté');
                    }
                    else if(data.error == "error_type_file"){
                      $("#msg_progress").text('Le type de fichier est non valide');
                    }
                    else{
                      $("#msg_progress").text('Une erreur est survenue');
                      console.log('ERRORS: ' + data.error);
                    }
                  },
                  error: function(jqXHR, textStatus, errorThrown){
                    console.log('ERRORS: ' + textStatus);
                  }
                });
              }
            }
          }
      });
			
			var uploadFile = false,waitUpload = false;
			
			$("#form_mail_customer").on("change","#piece_jointe", function(e){
				uploadFile = true;
				var files = e.target.files;
				var data = new FormData();
				var el = $(this);
				
				el.next('span').show();
				waitUpload = true;
				
				$.each(files, function(key, value){
					data.append('piece_jointe_mail', value);
				});
				
				$.ajax({
					url: '/admin/upload_file/piece_jointe_mail?piece_jointe_mail=1',
					type: 'POST',
					data: data,
					cache: false,
					dataType: 'json',
					processData: false,
					contentType: false,
					success: function(data, textStatus, jqXHR){	
						uploadFile = false;
						$("#piece_jointe_mail").val(data.new_file);
						el.next('span').hide();
						waitUpload = false;
					},
					error: function(jqXHR, textStatus, errorThrown){
						console.log('ERRORS: ' + textStatus);
					}
				});
			});
			
			$("#send_mail_customer_btn").click(function(){
				if(!waitUpload){
					$("#send_mail_customer").dialog("open");
					$("#area_mail").cleditor({			
						width: '100%',
						height: '250px',
						bodyStyle: 'margin: 10px; font: 12px Arial,Verdana; cursor:text',
						useCSS: true
					});
					
					
					if($("#user_mail").length == 0){
						$.ajax({
							type: "POST",
							url: "/admin/getUserMail",
							success: function(data){
								$("#listUser").append(data);
								$("#user_mail").dualselect();
							}
						});
					}
				}else{
					alert('Attendre la fin de l\'upload du fichier. Merci.');
				}
				
				return false;
            });
            
      $("#send_document_btn").click(function(){
					$("#send_document_downloadable").dialog("open");
          
					//	$.ajax({
					//		type: "POST",
					//		url: "/admin/getUserMail",
					//		success: function(data){
					//			$("#listUser").append(data);
					//			$("#user_mail").dualselect();
					//		}
					//	});
				return false;
      });
	  
	  $("#print_etiquette").click(function(){
			$("#show_etiquette").dialog("open");		
			return false;
      });
      
    $("#print_etiquette_fabrication").click(function(){
			$("#show_etiquette_fabrication").dialog("open");		
			return false;
    });
      
      
      $("#show_nouvelle_date_bl").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        width: 480,
        buttons: {
            "Annuler": function() {
                $(this).dialog( "close" );
            },
            "Remplacer la date": function() {
              var addvar = "";
              
              if(type_optique == "lentille"){
                addvar = "&type_optique="+type_optique+"&intitule_type_optique="+$("#libelle_lentille").val()+"&libelle_quantite_lentille_gauche="+$("#libelle_quantite_lentille_gauche").val()+"&libelle_quantite_lentille_droit="+$("#libelle_quantite_lentille_droit").val()
              }
            
                 $.ajax({
                    type: "POST",
                    url: "/admin/nouvelle_date_bl",
                    data : "id_commande="+$("#id_nouvelle_date_bl").val()+"&date_bl="+$("#nouvelle_date_bl").val()+"&type_optique="+$("input[name=type_optique]:checked").val()+addvar,
                    success: function(data){
                      $("#show_nouvelle_date_bl").dialog("close");
                      $("#show_envoi_bl").dialog("open");
                    }
                });
            }
        },
        show: {
            effect: "blind",
            duration: 500
        },
        hide: {
            effect: "blind",
            duration: 500
        }
      });
      
      
      $("#show_quantite_lentille").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        width: 480,
        buttons: {
            "Annuler": function() {
                $(this).dialog( "close" );
            },
            "Valider": function() {
               $(this).dialog( "close" );
              $("#show_nouvelle_date_bl").dialog("open");
            }
        },
        show: {
            effect: "blind",
            duration: 500
        },
        hide: {
            effect: "blind",
            duration: 500
        }
      });
      
      $("#show_libelle_lentille").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        width: 480,
        buttons: {
            "Annuler": function() {
                $(this).dialog( "close" );
            },
            "Valider": function() {
               $(this).dialog( "close" );
              $("#show_quantite_lentille").dialog("open");
            }
        },
        show: {
            effect: "blind",
            duration: 500
        },
        hide: {
            effect: "blind",
            duration: 500
        }
      });
      
      $("#show_verre_lentille").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        width: 480,
        buttons: {
            "Annuler": function() {
                $(this).dialog( "close" );
            },
            "Valider": function() {
                  $(this).dialog( "close" );
                  console.log(type_optique);
                 if(type_optique == "verre"){
                  $("#show_nouvelle_date_bl").dialog("open");
                 } else {
                  $("#show_libelle_lentille").dialog("open");
                 }
            }
        },
        show: {
            effect: "blind",
            duration: 500
        },
        hide: {
            effect: "blind",
            duration: 500
        }
      });
      
      $("#show_envoi_bl").dialog({
        autoOpen: false,
        modal: true,
        resizable: false,
        width: 480,
        buttons: {
            "Valider": function() {
              if($('#envoi_nouveau_bl_oui').is(':checked')){
                $('#envoi_nouveau_bl_oui').removeAttr('checked');
                 $.ajax({
                    type: "POST",
                    url: "/admin/send_nouveau_bl",
                    data : "id_commande="+$("#id_nouvelle_date_bl").val()+"&id_users="+$("#id_users_nouveau_bl").val(),
                    success: function(data){
                     $("#show_envoi_bl").dialog("close");
                      $("#show_message_fin").dialog("open");
                    }
                });
              } else if ($('#envoi_nouveau_bl_non').is(':checked')){
                $('#envoi_nouveau_bl_non').removeAttr('checked');
                $("#show_envoi_bl").dialog("close");
                 $("#show_message_fin").dialog("open");
              }
            }
        },
        show: {
            effect: "blind",
            duration: 500
        },
        hide: {
            effect: "blind",
            duration: 500
        }
      });
      
      $("#show_message_fin").dialog({
                autoOpen: false,
                modal: true,
                width: 400,
                buttons: [{
                    text: "Ok",
                    click: function() {
                    window.location.reload();
                    $(this).dialog("close");
                    }
                }]
      });
            
     $("#show_etiquette").dialog({
                autoOpen: false,
                modal: true,
                width: 400,
                buttons: [{
                    text: "Générer",
                    click: function() {
						$("#form_show_etiquette").submit();
						 $(this).dialog("close");
                    }
                }]
      });
      
      $("#show_etiquette_fabrication").dialog({
                autoOpen: false,
                modal: true,
                width: 400,
                buttons: [{
                    text: "Générer",
                    click: function() {
                      $("#form_show_etiquette_fabrication").submit();
                       $(this).dialog("close");
                    }
                }]
      });
      
      
			
			$(".dialog").dialog({
                autoOpen: false,
                modal: true,
                buttons: [{
                    text: "Ok",
                    click: function() {
                        $(this).dialog("close");
                    }
                }]
            });


            $("#reduc_facture").dialog({
                autoOpen: false,
                modal: true,
                resizable: false,
                width: 480,
                buttons: {
                    "Annuler": function() {
                        $(this).dialog( "close" );
                    },
                    "Confirmer la remise": function() {
                        var reduction = $("#reduction_facture").val();

                        if(reduction!=""){
                            reduction = reduction.replace(",",".");
							reduction = $.trim(reduction);
                            if($.isNumeric(reduction)){
                                var date = $("#date_reduc_facture").val(), id_users = $("#reduc_facture #id_users").val();
                                $.ajax({
                                    type: "POST",
                                    url: "/admin/reduction_facture",
                                    data : $("#form_reduc_facture").serialize(),
                                    success: function(data){
										$("#totalFacture_"+date+"_"+id_users).text(data);
										$("#deleteReduction_"+date+"_"+id_users).fadeIn();
										$("#reduc_facture").dialog("close");
										$("#success_reduc_facture").dialog("open");
                                    }
                                });
                            }
                            else
                                $("#error_number_reduc_facture").dialog("open");
                        }
                        else
                            $("#error_reduc_facture").dialog("open");
                    }
                },
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "blind",
                    duration: 500
                }
            });

            $("#confirm_delete_reduc_facture").dialog({
                autoOpen: false,
                modal: true,
                resizable: false,
                width: 320,
                buttons: {
                    "Annuler": function() {
                        $(this).dialog( "close" );
                    },
                    "Ok": function() {
                        var date = $("#date_delete_reduc_facture").val(), id_users = $("#id_users_delete_reduc_facture").val();
                        $.ajax({
                            type: "POST",
                            url: "/admin/delete_reduction",
                            data : "date_remise="+date+"&id_users="+id_users+"&totalFacture="+$("#totalFacture_delete_reduct_facture").val()+"&reduction="+$("#deleteRemise_"+date+"_"+id_users).parent('p').find('span').text(),
                            success: function(data){
                                $("#totalFacture_"+date.split('-')[0]+"-"+date.split('-')[1]+"_"+id_users).text(data);
                                $("#confirm_delete_reduc_facture").dialog("close");
                                $("#success_delete_reduc_facture").dialog("open");
                                $("#deleteRemise_"+date+"_"+id_users).parent('p').remove();

                                if($("#list_reduc_facture p").length == 0){
                                    $("#deleteReduction_"+date.split('-')[0]+"-"+date.split('-')[1]+"_"+id_users).hide();
                                    $("#list_reduc_facture").dialog("close");
                                }

                            }
                        });

                        $("#deleteReduction_"+date+"_"+id_users).fadeOut();
                    }
                },
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "blind",
                    duration: 500
                }
            });

            $("#change_tva").dialog({
                autoOpen: false,
                modal: true,
                resizable: false,
                width: 320,
                buttons: {
                    "Annuler": function() {
                        $(this).dialog( "close" );
                    },
                    "Modifier la TVA": function() {
                        var taux_tva = $("#taux_tva").val();

                        if(taux_tva!=""){
                            taux_tva = taux_tva.replace(",",".");
							taux_tva = $.trim(taux_tva);
                            if($.isNumeric(taux_tva)){
                                $.ajax({
                                    type: "POST",
                                    url: "/admin/modifier_tva",
                                    data : $("#form_change_tva").serialize(),
                                    success: function(data){
										$("#change_tva > p > span").text(taux_tva);
										$("#change_tva").dialog("close");
										$("#success_tva").dialog("open");
                                    }
                                });
                            }
                            else
                                $("#error_tva_number").dialog("open");
                        }
                        else
                            $("#error_tva").dialog("open");
                    }
                },
                show: {
                    effect: "blind",
                    duration: 500
                },
                hide: {
                    effect: "blind",
                    duration: 500
                }
            });

            $("#param_tva").click(function(){
                $("#change_tva").dialog("open");

                return false;
            });

            $$.registry.tooltips();

            $.datepicker.regional['fr'] = {
                closeText: 'Fermer',
                prevText: 'Précédent',
                nextText: 'Suivant',
                currentText: 'Aujourd\'hui',
                monthNames: ['janvier', 'février', 'mars', 'avril', 'mai', 'juin',
                    'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'],
                monthNamesShort: ['janv.', 'févr.', 'mars', 'avril', 'mai', 'juin',
                    'juil.', 'août', 'sept.', 'oct.', 'nov.', 'déc.'],
                dayNames: ['dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi'],
                dayNamesShort: ['dim.', 'lun.', 'mar.', 'mer.', 'jeu.', 'ven.', 'sam.'],
                dayNamesMin: ['D','L','M','M','J','V','S'],
                weekHeader: 'Sem.',
                dateFormat: 'dd/mm/yy',
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''};


            $.extend($.datepicker._defaults, $.datepicker.regional['fr']);
			
			var check = true;
			
			window.setInterval(function(){
				if(check){
					$.ajax({
						type: "POST",
						url: "/admin/checkNewOrder",
            dataType: 'json',
						beforeSend: function(){
							check = false;
						},
						success: function(data){
							if(data.son != ""){
								if($('#Audio').length == 0){
									$('<audio id="Audio" width="300" height="32"><source src="" type="audio/mp3" /></audio>').appendTo('body');
								}
                
                var pre = '<?php echo $pre_url;?>';
                
                $("#Audio").find('source').attr('src', pre+'static/audio/audio'+data.son+'.mp3');

								$("#Audio")[0].play();
								$.jGrowl("Une nouvelle commande vient d'être passée.");
								
								if(typeof isRechargeable !="undefined" && isRechargeable == true)
									table.dataTable().fnReloadAjax();
							}
							
							check = true;
						},
						error: function(){
							check = true;
						}
					});
				}
			},5000);
      
      $("#menu").sticky({topSpacing:40});
			
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
    </script> */ ?>