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
                    <h4 class="page-title m-b-10 pull-left">Comptes sur le télédétourage</h4>
                </div>

                <div class="col-sm-12">
                    <div class="card-box clearfix">
                        <h4 class="header-title m-t-0">Options d'affichage</h4>
                        <p class="text-muted font-13 m-b-15 m-t-10">Sélectionnez les options d'affichage</p>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="annee_variation"> Année </label>
                            <select id="annee_variation" class="form-control">
                                <option value="">Choisissez</option>
                                <?php
                                $annee_actuelle = date('Y');
                                for($annee = 2022;$annee < $annee_actuelle;$annee++){
                                    echo '<option value="'.$annee.'">'.$annee.'</option>';
                                }
                                echo '<option value="'.$annee.'" selected>'.$annee.'</option>';
                                ?>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label class="m-b-10" for="numero_magasin"> Magasin </label>
                            <select id="numero_magasin" class="form-control">
                                <option value="">Choisissez</option>
                                <?php
                                for($user = 3;$user <= $maxUser;$user++){
                                    echo '<option value="'.$user.'">'.$user.'</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="col-sm-2">
                            <label for="get_commercial" class="m-b-10">Commercial</label>
                            <select id="get_commercial" name="login_notification" class="form-control">
                            <option value="Tout">Tout</option>
                            <option value="Daniel">Daniel</option>
                            <option value="Gregory">Gregory</option>
                            </select>
                        </div>
                    </div>
                </div>


                
                <div class="col-sm-12">
                    <div class="card-box">
                        <h4 class="header-title m-t-0 m-b-30">Liste des commandes</h4>
                        <table id="datatable" class="table table-striped table-admin-commandes dt-responsive nowrap">
                            <thead>
                            <tr id="title_table">
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

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

    $(document).ready(function() {
        $(".content").on("change","#annee_variation,#numero_magasin,#get_commercial", function(){
            if($("#annee_variation").val()!="")
            test(false)
        });
        // $('#get_commercial').on('change', function() {
            
        // })

        test()

    });
    // function hideCommercial() {
    //     if ($('#get_commercial').val() == 'Daniel') {
    //         $('.daniel').removeClass('hide');
    //         $('.gregory').addClass('hide');
    //     }
    //     else if ($('#get_commercial').val() == 'Gregory') {
    //         $('.daniel').addClass('hide');
    //         $('.gregory').removeClass('hide');
    //     }
    //     else {
    //         $('.daniel').removeClass('hide');
    //         $('.gregory').removeClass('hide');
    //     }
    // }

    function test(first = true) {
        $.ajax({
            type: "POST",
            url: "/admin/comptes_teledetourage_ajax",
            data: {"commercial" : $('#get_commercial').val(), "numero_magasin" : $('#numero_magasin').val(), "annee_variation" : $('#annee_variation').val()},
            dataType: "json",
        }).done( function(data) {
            console.log(data);
            $("#datatable tbody").remove();
            $("#datatable th").remove();
            let keys = Object.keys(data[0]);
            console.log(keys.length);
            let columns = [];
            let node;
            let textnode;
            for (const element of keys) {
                console.log(element);
                if (element != 'commercial') {

                    node = document.createElement("th");
                    textnode = document.createTextNode(element);
                    node.classList.add("th-compte_teledetourage");
                    //node.style.cssText = 'width:25%;';
                    node.appendChild(textnode);
                    // console.log(node);

                    document.getElementById("title_table").appendChild(node);
                    // console.log(node);

                    columns.push({"data": element});
                }
            }
            setTimeout(function(){
                $(".th-compte_teledetourage").width(100 / keys.length + '%');
            },10)

            console.log(columns);


            $('#datatable').DataTable({
                aLengthMenu: [
                    [10, 25, 50, 100, 200, -1],
                    [10, 25, 50, 100, 200, "Tout"]
                ],
                "destroy": true,
                "aaData": data,
                "columns": columns,
                "displayStart" : $('#datatable').DataTable().page.info().page * 10,
                "language": {
                    "lengthMenu": "Afficher _MENU_ traitements par page",
                    "info": "Affichage de la page page _PAGE_ sur _PAGES_",
                    "infoFiltered": "(Filtrat de _MAX_ entrées)",
                    "search": "Recherche",
                    "paginate": {
                        "first":      "Première",
                        "last":       "Dernière",
                        "next":       "Suivant",
                        "previous":   "Précédent"
                    }
                },
                "createdRow": function (row, data, index) {
                    // console.log(data['active']);
                    // console.log('active');
                    // console.log(data);
                    // console.log(row);
                    if (data['commercial'] == 'Daniel') {
                        $(row).addClass('daniel');
                        // $(row).removeClass('gregory');
                    }
                    else {
                        $(row).addClass('gregory');

                    }
                },
            });


            // $('#get_commercial').on('change', function() {
            //     hideCommercial()
            // });
        });
    }

    $('#datatable').on( 'draw.dt', function () {
        // e.preventDefault();
    });
    // TableManageButtons.init();

</script>

<style>
    tr, th {
        text-align: center;
    }

    .daniel {
        background-color: rgba(0, 146, 255, 0.33) !important;
    }

    .gregory {
        background-color: rgba(0, 255, 11, 0.41) !important;
    }

    #datatable td {
        font-weight: bold !important;
    }
</style>
<?php include_once('footer.php'); ?>

