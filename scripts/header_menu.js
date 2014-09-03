/**
 * Created by andranik.zurabyan on 6/17/14.
 */

//$( "li" ).hover(
//function() {
//    $( this ).append( $( "<span> ***</span>" ) );
//    }, function() {
//    $( this ).find( "span:last" ).remove();
//    }
//);
//
//$( "li.fade" ).hover(function() {
//    $( this ).fadeOut( 100 );
//    $( this ).fadeIn( 500 );
//    });
$menustatus = "";
$menuopenitem = "";
$langstatus = "";

function openHeaderSubMenu(curr, item) {
    $this = curr;
    $(".header_submenu").hide();
    var $middle_block = $(".header_middle_content");
//    setTimeout(function () {
    if ($menustatus == "") {
        $($this).find('i').css('-webkit-transform', 'rotate(180deg)');
        $($this).find('i').css('-moz-transform', 'rotate(180deg)');
        $($this).find('i').css('transform', 'rotate(180deg)');
        $($this).find('i').css('color', 'red');
    }
    $middle_block.css({"margin-top": "0px"}, function () {
    });
    $menustatus = "1";
    $menuopenitem = item;
//    }, 300);
    $("#header_submenu_" + item).show();
}

function closeHeaderSubMenu() {
    var $middle_block = $(".header_middle_content");
    var $bottom_block = $(".header_bottom");
    $("#menucontainer").mouseleave(function () {
        $middle_block.css({"margin-top": "-200px"}, function () {
            // Animation complete.
        });
//        }, 300);
//    setTimeout(function () {
//        $(".header_submenu").hide();
//    }, 800);
        $menustatus = "";
        $menuopenitem = "";
        $(".header_menu_arrow ").attr("style", "");
    });
}

function openLangBlock() {
    if ($langstatus == "") {
//        $(".header_language_block").css({"background-color": "#2a2a2a"});
//        $(".header_lng_icon").css({"opacity": "1"});
//        $(".header_language_block .header_lng_icon_arrow_block i").css({"-ms-transform": "rotate(90deg)", "-webkit-transform": "rotate(90deg)", "transform": "rotate(90deg)", "color": "red"});
        var $dropdown_mask = $(".dropdown-mask");
        var $dropdown = $(".dropdown");
        $dropdown_mask.css({"visibility": "visible", "opacity": "1"});
        $dropdown.css({"margin-top": "0px", "opacity": "1"});
        $langstatus = "1";
    }
}

function closeLangBlock() {
    var $dropdown_mask = $(".dropdown-mask");
    var $dropdown = $(".dropdown");
    if ($dropdown_mask.mouseover() == true || $dropdown.mouseover() == true) {
    }
    else {
        $(".header_language_block").attr("style", "");
        $(".header_lng_icon").attr("style", "");
        $(".header_language_block .header_lng_icon_arrow_block i").attr("style", "");
        $dropdown_mask.css({"visibility": "hidden"});
        $dropdown.css({"margin-top": "-210px"});
        $langstatus = "";
    }
}