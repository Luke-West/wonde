$(function() {

    $('.wonde-id-saved').hide();
    $('.valid-id-error').hide();

    $(document).on('click', '.save-wonde-id', function() {
        $('.valid-id-error').hide();

        var userId = $('#user-id').val();
        var wondeId = $('#wonde-id').val();

        if (wondeId.length < 7) {
            $('.valid-id-error').show();
        }

        axios.post(`/employees/${userId}/update-wonde-id`,
            {
                'wondeId' : wondeId,
            }
        ).then(function() {
            location.reload();
        });
    });

});
