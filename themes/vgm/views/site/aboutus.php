<?php
/* @var $this SiteController */
/* @var $aboutus About[] */


Yii::app()->clientScript->registerMetaTag('vgm', 'keywords');
Yii::app()->clientScript->registerMetaTag('vgm description', 'description');
Yii::app()->clientScript->registerMetaTag('vgm', null, null, array('property' => 'og:description'));
?>

<script type="text/javascript">
    $(window).load(function () {
        var hash = $(location).attr('hash').substring(1);
        if (hash !== "") {
            showTab(hash);
        }
        else{
            showTab('company');
        }
    });

    function showTab(item) {
        $(".subblock").css("display", "none");
        $("#" + item).css("display", "block");
        $(".left_menu_item").attr("class", "left_menu_item");
        $("#btn_" + item).attr("class", "left_menu_item mselected");
    }

    function showdeskription(item) {
        var object = $(item).next();
        if (object.is(':visible')) {
            object.css("display", "none");
        }
        else {
            object.css("display", "block");
        }
    }

</script>

<div class="container_wrapper">
    <div class="left_menu_block block_25per left">
        <div class="left_menu">
            <a href="#company" onclick="showTab('company')">
                <div id="btn_company" class="left_menu_item mselected">Company</div>
            </a>
            <a href="#visionandvalues" onclick="showTab('visionandvalues')">
                <div id="btn_visionandvalues" class="left_menu_item">Vision and values</div>
            </a>
            <a href="#partnership" onclick="showTab('partnership')">
                <div id="btn_partnership" class="left_menu_item">Partnership</div>
            </a>
        </div>
    </div>
    <div class="block_75per left">
        <div class="right_block">
            <div id="company" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <?= $aboutus->company ?>
                    </div>
                </div>
            </div>
            <div id="visionandvalues" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <?= $aboutus->vision ?>
                    </div>
                </div>
            </div>
            <div id="partnership" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <?= $aboutus->partnership ?>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>