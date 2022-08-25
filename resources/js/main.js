$(function() {

    $(document).on('click', '.save-wonde-id', function() {
        var userId = $('#user-id').val();
        var wondeId = $('#wonde-id').val();

        axios.post(`/employees/${userId}/update-wonde-id`,
            {
                'wondeId' : wondeId,
            }
        ).then(function() {
            console.log('foobar');
        });
    });

});
