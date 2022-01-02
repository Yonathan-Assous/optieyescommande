<?php
include_once('header.php');
?>
<div class="content-page" style="margin: 0 240px;">
    <!-- Start content -->
    <div class="content">
        <div class="container">
            <div id="loading-overlay" style="display:none;"></div>
            <div id="loading" style="display:none;">
                <span id="text_loading">Chargement...</span>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="page-title m-b-10">CGV</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box">
                        <div>
<!--                            Pour pouvoir continuer dans notre site, vous devez accepter les conditions-->
<!--                            <embed src=CGV_Optieyes_24062021_clean.pdf width=1000 height=1000 type='application/pdf'/>-->
<!--                            <iframe src="CGV_Optieyes_24062021_clean.pdf" width="800" height="1000" align="middle"></iframe>-->

                            <p>Pour pouvoir continuer dans notre site, vous devez accepter
                                <a href="CGV_Optieyes_24062021_clean.pdf" target="_blank"><u style="font-weight: bold">les conditions d'optieyes</u></a>.</p>
                            <p>Vous recevrez un mail après avoir accepté</p>
                        </div>
                        <div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check_condition">
                                <label class="form-check-label" for="materialUnchecked">Accepter les conditions</label>
                            </div>
<!--                            <iframe src="CGV_Optieyes_24062021_clean.pdf" width="800" height="1000" align="middle"></iframe>-->
<!--                            <object data="CGV_Optieyes_24062021_clean.pdf" type="application/pdf" width="800" height="1000">-->
<!--                                alt : <a href="CGV_Optieyes_24062021_clean.pdf">test.pdf</a>-->
<!--                            </object>-->
                        </div>
                        <div id="modal_condition" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"">
                            <div class="modal-dialog" style="width: 90%; max-width: 700px;">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Acceptation des conditions</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="panel-body" style="padding-top: 15px">
                                            <div>
                                                Veuillez Confirmer le fait que vous acceptez les conditions
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button id="refuse_conditions" class="btn btn-default waves-effect" data-dismiss="modal">Annuler</button>
                                        <button id="accept_conditions" class="btn btn-warning waves-effect waves-light" data-dismiss="modal">Suivant</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- end col -->
            </div>

        </div>
    </div>


</div>
<script>
    $('#check_condition').on('change', function() {
        if(document.getElementById('check_condition').checked == true) {
            $('#modal_condition').modal('show');
        }
    });

    $('#refuse_conditions').on('click', function() {
        document.getElementById('check_condition').checked = false;
    });

    $('#accept_conditions').on('click', function() {
        isLoading('Veuillez patienter');
        $.ajax({
            type: "POST",
            url: "/index/verifyCheckedCondition",
            data: {},
            dataType: "json",
            success: function (data) {
                location.href = window.location.href;
            }
        });
    });

    function isLoading(text) {
        $("#text_loading").text(text) ;
        $("#loading-overlay,#loading").show();
    }
</script>
<?php
die;
?>
