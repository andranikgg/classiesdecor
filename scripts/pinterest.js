var limit = 10;
var offset = 30;

function ajax() {
    var url = '/GetArticlesHome';
    var data = { offset: offset, limit: limit };
    offset += limit;
    $.post(url, data, function (result) {
        $("#pinterest_here").append(result);
        pinteresting();
    });
}


    
$(window).scroll(function () {
    if ($("div#pinterest_here").height() - $(window).scrollTop() < 400) {
//        ajax();
    }
});

$(document).ready(function () {

    //$(".start_blog").click(function () {
    //    if (user_id == "")
    //    {
    //        window.location.href = "/login";
    //    }
    //    else
    //    {
    //        var url = '/generateUserKey';
    //        var data = {};
    //        $.post(url, data, function (result) {
    //            //alert(result);
    //            var redirect = "http://blog.ggfinances.com/redirecting/" + result;
    //            console.log(redirect);
    //           // window.open(redirect, "new staff");
    //        });

    //    }
    //        //window.location(window.open("http://blog.ggfinances.com/redirecting/" + md5user));
    //});

    $(".start_blog").on("click", function () {
        openAdmin();
    })
    //$(".start_game").on("click", function () {
    //    openGame();
    //})

});

$(window).load(function () {
    setTimeout('pinteresting()', 100);
});
				
$(window).resize(function () {
	pinteresting();
});

function pinteresting()
{
	var W = $("#pinterest_here").width();
	var img_w = 203;
	var padding = 15;		
	var cols = Math.round( W / (img_w + padding) - 0.5 );		
	var centering = ( W - (img_w+padding)*cols-padding ) / 2;
		
	var left = new Array();
	var top = new Array();
		
	for(var i = 0; i < cols; i++) {
		top[i] = 0;
		if(i == 0)
			left[i] = 0;
		else
			left[i] = left[i-1] + img_w + padding;
	}
		
	i = 0;		
	$(".article_box").each(function (index) {
			
        var h = $(this).height();
			
		$(this).css("top", top[i%cols]);
		$(this).css("left", left[i%cols]+centering);			
			
		top[i%cols] += (h+padding);
			
		i++;
	});

    var height = top[0];
	for(var i = 1; i < cols; i++) {
		if(top[i] > height)
		    height = top[i];
	}

	$(".container_grid").css("height", height);
}