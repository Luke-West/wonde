$(function() {

    $(document).on('click', '.save-wonde-id', function() {
        var laravelToken = $('meta[name="csrf-token"]').getAttribute('content');
        var userId = $('#user-id').val();
        var wondeId = $('#wonde-id').val();
        axios.post(`/employee/${userId}/update-wonde-id/${wondeId}`, { headers: 'X-CSRF-TOKEN' : laravelToken }
        ).then(function() {

        });
    });

});
