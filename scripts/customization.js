$(document).ready(function () {

    $(".container_cust_menu_item").click(function () {
        $(".container_cust_menu_item").attr("class", "container_cust_menu_item left");
        $(this).attr("class", "container_cust_menu_item container_cust_menu_item_selected left");
        $(".container_cust_block").css("display", "none");
        var block = $(this).attr("menu");
        $("#cust_block_" + block).css("display", "block");
    });

    $(".container_cust_submenu_item").click(function () {
        var curm=$(this);
        var menu = $(curm).attr("menu");
        var grandparent = $(this).parent().parent();
        var block = $(this).parent().parent().attr("block");
        console.log(block);
        console.log(menu);
        $(this).parent().find(".container_cust_submenu_item").each(function (index) {
            $(this).attr("class", "container_cust_submenu_item left");
            $(curm).attr("class", "container_cust_submenu_item container_cust_submenu_item_selected left");
        });
        $(grandparent).find(".container_cust_content").each(function (index) {
            $(this).css("display", "none");
        });
        $("#cust_content_" + block + "_" + menu).css("display", "block");
    });
});

function example() {
}

