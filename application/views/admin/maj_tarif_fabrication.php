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
                    <h4 class="page-title m-b-20">Grilles tarifaires clients</h4>
                </div>


                <div class="col-sm-12">
                    <div class="card-box clearfix">

                        <h4 class="header-title m-t-0 m-b-30">Mise à jour des grilles</h4>

                        <div class="col-sm-4">
                            <?php echo form_open_multipart('admin/do_upload');?>

                            <div class="form-group">
                                <select name="grille" class="form-control">
                                    <option value="1">Grille 1</option>
                                    <option value="2">Grille 2</option>
                                    <option value="3">Grille 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="file" name="new_file" size="20" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-inverse" value="Mettre à jour" />
                            </div>
                            <?php
                            if(isset($error)){
                                echo "<p style='color:red'>Une erreur est survenue !</p>";
                            } else if(isset($upload_data)){
                                echo "<p style='color:green'>Fichier mise à jour !</p>";
                            }
                            ?>
                            </form>
                        </div>



                    </div>
                </div><!-- end col -->
            </div>


        </div> <!-- container -->
    </div> <!-- content -->

    <script>
        var resizefunc = [];
    </script>

    <!-- Datatables-->
    <script src="static/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="static/assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="static/assets/plugins/datatables/jszip.min.js"></script>
    <script src="static/assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="static/assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="static/assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="static/assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="static/assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="static/assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Modal-Effect -->
    <script src="static/assets/plugins/custombox/dist/custombox.min.js"></script>
    <script src="static/assets/plugins/custombox/dist/legacy.min.js"></script>


    <?php include_once('footer.php'); ?>

