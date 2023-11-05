$(document).ready(function () {
    $('#changeColorButton').click(function () {
        $.ajax({
            type: "GET",
            url: '/ajax-request',
            success: function (response) {
                $('body').css('background-color', response.color);
            }
        });
    });
});
