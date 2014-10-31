<?php
/* @var $this SiteController */
/* @var $news News[] */


Yii::app()->clientScript->registerMetaTag('vgm', 'keywords');
Yii::app()->clientScript->registerMetaTag('vgm description', 'description');
Yii::app()->clientScript->registerMetaTag('vgm', null, null, array('property' => 'og:description'));
?>

<script type="text/javascript">
    $(window).load(function(){
        var hash = $(location).attr('hash').substring(1);
        if(hash !== "")
        {
            showTab(hash);
        }
        else
        {
            showTab('news_intro');
        }
    });

    function showTab(item) {
        $(".subblock").css("display","none");
        $("#" + item).css("display","block");
        $(".left_menu_item").attr("class","left_menu_item");
        $("#btn_" + item).attr("class","left_menu_item mselected");
    }

    function showdeskription(item) {
        var object = $(item).next();
        $(".text").each(function () {
            var t = $(this);
            if (t.is(':visible')) {
                t.css("display", "none");
            }
        });
        if (object.is(':visible')) {
            object.css("display", "none");
        }
        else {
            object.css("display", "block");
        }
    }

</script>

<div class="container_wrapper">
    <div class="left_menu_block blocks_1 left">

        <div class="container_block_row">
            <div class="content">
                <div class="hdr">News feed</div>
                <?php foreach ($news as $newsitem): ?>
                    <div class="title pointer" onclick="showdeskription(this)">
                        <?= $newsitem->title ?>
                    </div>
                    <div class="text">
                        <?= substr($newsitem->content, 0, 100) ?>
                    </div>
                    <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </div>

    <div class="clear"></div>
</div>