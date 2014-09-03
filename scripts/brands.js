$(document).ready(function () {

    $(".article_image").click(function () {
        var id = $(this).attr("id");
        openBrand(id);
    });
});

function openBrand(id) {
    $.ajax({
        type: 'POST',
        url: 'GetBrand',
        data: {id: id},
        success: function (data) {
            $('.container_grid_content').html(data);
            correctPhoto();
        }
    });
}

function correctPhoto() {
    var contentheight = $(".container_grid_content_item").height();
    var imgheight = $(".container_grid_content_img_block").height();
    $(".container_grid_content_img_block").css("margin-top",((contentheight-imgheight)-10)/2);
}

