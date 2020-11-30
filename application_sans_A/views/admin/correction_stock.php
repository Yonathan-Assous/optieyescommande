<?php
include_once('header.php');
include_once('menu.php');
?>

<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <div class="row">

                <div class="col-sm-12">
                    <h4 class="page-title m-b-20">Corrections des verres de stock</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box clearfix">

                        <h4 class="header-title m-t-0">Options d'affichage</h4>
                        <p class="text-muted font-13 m-b-15 m-t-10">Sélectionnez les options d'affichage</p>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="verre_stock"> Verre </label>
                            <select name="verre_stock" id="verre_stock" class="form-control">
                                <?php
                                if(isset($verres) && $verres != false)
                                    foreach($verres as $verre){
                                        echo '<option value="'.$verre->id_verre.'">'.$verre->libelle_verre.'</option>';
                                    }
                                else
                                    echo '<option value="">Aucun verre</option>';
                                ?>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="diametre"> Diamètre </label>
                            <select name="diametre" id="diametre" class="form-control">
                                <option value="55">55</option>
                                <option value="60">60</option>
                                <option value="65">65</option>
                                <option value="67">67</option>
                                <option value="70">70</option>
                                <option value="72">72</option>
                                <option value="75">75</option>
                                <option value="80">80</option>
                            </select>
                        </div>

                    </div>


                </div>


                <div class="col-sm-12">
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Aperçu stock</h4>

                        <div id="tab_correction"></div>

                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

    <script>
        var resizefunc = [];
    </script>

    <!-- Datatables-->
    <script src="/static/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="/static/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="/static/assets/plugins/datatables/jszip.min.js"></script>
    <script src="/static/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="/static/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="/static/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="/static/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="/static/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="/static/assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Modal-Effect -->
    <script src="/static/assets/plugins/custombox/dist/custombox.min.js"></script>
    <script src="/static/assets/plugins/custombox/dist/legacy.min.js"></script>

    <!-- Datatable init js -->
    <script src="/static/assets/pages/jquery.datatables.init.js"></script>

    <script>

        function ajaxGrilleCorrection(){
            $.ajax({
                type: "POST",
                url: "/admin/setGrilleCorrection",
                data : "id_verre="+$("#verre_stock").val()+"&diametre="+$("#diametre").val(),
                dataType: "html",
                success: function(data){
                    $("#tab_correction").html(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert(textStatus+" "+errorThrown);
                }
            });
        }

        $(document).ready(function() {


            ajaxGrilleCorrection();

            $(".content").on("change","#verre_stock,#diametre",function(){
                ajaxGrilleCorrection();
            });

            $(".content").on("click","#correction td.selectionnable",function(){
                var el = $(this),statut = 'ajout';

                if(el.hasClass('active')) {
                    statut = 'supprimer';
                }

                $.ajax({
                    type: "POST",
                    url: "/admin/MiseEnPlaceCorrection",
                    data : "id_verre="+$("#verre_stock").val()+"&statut="+statut+"&sphere="+el.find('input[name=sphere]').val()+'&cylindre='+el.find('input[name=cylindre]').val()+"&diametre="+$("#diametre").val(),
                    success: function(data){
                        if(!el.hasClass('active'))
                            el.addClass('active');
                        else
                            el.removeClass('active');
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        alert(textStatus+" "+errorThrown);
                    }
                });
            });


        });

        TableManageButtons.init();

    </script>

    <?php include_once('footer.php'); ?>

