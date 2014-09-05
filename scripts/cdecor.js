$(document).ready(function () {
});

function openGallery() {
    $.ajax({
        type: 'POST',
        url: 'Inspiration',
        success: function (data) {
            $('.popup').html(data);
        }
    });
    $(".content_block_div").fadeIn(300);
    $("#inspiration_popup").fadeIn(1000);
    var popMargTop = ($("#inspiration_popup").height() + 24) / 2;
    var popMargLeft = ($("#inspiration_popup").width() + 24) / 2;
    $("#inspiration_popup").css({
        'margin-top': -popMargTop,
        'margin-left': -popMargLeft
    });
}

function closeGallery() {
    $("#inspiration_popup").fadeOut(300);
    $(".content_block_div").fadeOut(300);
    $("#inspiration_popup").html("");
}