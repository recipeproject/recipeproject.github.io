/* Custom jQuery for Recipe Project */

$(function() {
    $("#reg").click(function() {
        $('#loginForm').modal('hide');
    });

    $("#lostPass").click(function() {
        $('#loginForm').modal('hide');
    });
});

$(function() {
    $("#breakfast").click(function() {
        $('#loginForm').modal('show');
    });
});

$(function() {
    $("#dinner").click(function() {
        $('#loginForm').modal('show');
    });
});

$(function() {
    $("#supper").click(function() {
        $('#loginForm').modal('show');
    });
});
