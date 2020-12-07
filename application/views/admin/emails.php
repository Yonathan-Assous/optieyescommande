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
                    <div class="card-box">

                        <h4 class="header-title m-t-0 m-b-30">Envoi d'emails</h4>

                        <form id="form_mail_customer" class="no-style validate">

                            <div class="form-group clearfix ">
                                <label class="col-lg-2 control-label">Déstinataires</label>
                                <div class="col-lg-10">

                                    <a class="btn btn-warning m-b-10" id="selectAll">Sélectionner tous</a>
                                    <a class="btn btn-danger m-b-10" id="unselectAll">Déselectionner tous</a>

                                    <select name="user_mail[]" class="multi-select" multiple="" id="listUser">
                                        <?php echo $emails; ?>
                                    </select>
                                    <div class="validator"></div>
                                </div>
                            </div>

                            <div class="form-group clearfix ">
                                <label class="col-lg-2 control-label">Sujet du message</label>
                                <div class="col-lg-10">
                                    <input type="text" value="" class="form-control required" name="sujet_mail">
                                    <div class="validator"></div>
                                </div>
                            </div>

                            <div class="form-group clearfix ">
                                <label class="col-lg-2 control-label">Message</label>
                                <div class="col-lg-10">
                                    <textarea id="area_mail" name="area_mail" class="form-control"></textarea>
                                    <div class="validator"></div>
                                </div>
                            </div>

                            <div class="form-group clearfix ">
                                <label class="col-lg-2 control-label">Pièce jointe</label>
                                <div class="col-lg-10">
                                    <input type="file" class="ready" name="piece_jointe" id="piece_jointe">
                                    <div class="validator"></div>
                                </div>
                            </div>

                            <input type="hidden" value="" name="piece_jointe_mail" id="piece_jointe_mail" />

                            <div class="form-group clearfix">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-warning btn-mail">Envoyer le message</button>
                                </div>
                            </div>

                        </form>


                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

    <script>

        $(document).ready(function() {

            $('#listUser').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });

                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });

            $('#selectAll').on('click', function() {
                $('.content').find('.ms-list .ms-elem-selectable').click();
            });

            $('#unselectAll').on('click', function() {
                $('.content').find('.ms-list .ms-selected').click();
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

            $('.btn-mail').prop('disabled', true);

            $.ajax({
                url: '/admin/upload_file/piece_jointe_mail?piece_jointe_mail=1',
                type: 'POST',
                data: data,
                cache: false,
                dataType: 'json',
                processData: false,
                contentType: false,
                success: function(data, textStatus, jqXHR){
                    $('.btn-mail').prop('disabled', false);
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


        $('#form_mail_customer').on('submit', function(e) {

            e.preventDefault();

            if(uploadFile == false){
                $.ajax({
                    type: "POST",
                    url: "/admin/send_mail_customer",
                    data : $("#form_mail_customer").serialize(),
                    success: function(data){
                        swal({
                            title: "Email envoyé",
                            text: "Le mail a bien été envoyé",
                            type: "success",
                            showCancelButton: false,
                            showConfirmButton: false,
                            timer: 2000,
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    }
                });
            }

        });



        /*$("#area_mail").cleditor({
            width: '100%',
            height: '250px',
            bodyStyle: 'margin: 10px; font: 12px Arial,Verdana; cursor:text',
            useCSS: true
        });*/


        });


    </script>


<?php include_once('footer.php'); ?>