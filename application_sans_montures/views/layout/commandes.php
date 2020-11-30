<div id="detail-commande-lentilles" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 90%; max-width: 800px;">
        <div class="modal-content">
        </div>
    </div>
</div>

<div id="detail-commande" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog" style="width: 90%; max-width: 800px;">
        <div class="modal-content">
        </div>
    </div>
</div>

<script>
    $(document).on('click', '.commande-lentilles-info', function() {
        $.post('/index/commande_details_lentilles', { id: $(this).attr('rel') }, function(data) {
            $('#detail-commande-lentilles').find('.modal-content').html(data);
        });
    });

    $(document).on('click', '.commande-info', function() {
        $.post('/index/commande_details', { id: $(this).attr('rel') }, function(data) {
            $('#detail-commande').find('.modal-content').html(data);
        });
    });
</script>