$(document).ready(function() {

    /**
     * Delete a user
     */
    $('.btn-delete-user').click(function() {
        window.location.href = "http://localhost/qasite/htdocs/admin/users/delete/" + $(this).attr('data-id');
    });

    /**
     * Delete a question
     */
    $('.btn-delete-questions').click(function() {
        window.location.href = "http://localhost/qasite/htdocs/admin/questions/delete/" + $(this).attr('data-id');
    });


});