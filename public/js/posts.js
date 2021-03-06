window.onload = function() {
    $('#deleteModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var id = button.data('id'); // Extract info from data-* attributes
        action = $('#deletePost').attr('data-action').slice(0, -1); // Extract info from data-* attributes
        action += id;
        $('#deletePost').attr('action', action);
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Delete the publication: ' + id);
    })
}
