<?php
/* @var $this SiteController */
/* @var $brands Brands[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/brands.css"/>
<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/pinterest.js"></script>
<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/brands.js"></script>


<div class="container_slider_block_content">
    <div class="banner">
        <ul id="banner_ul">
            <?php foreach($page->bannerImages as $banner): ?>
                <li>
                    <img src="<?= Yii::app()->baseUrl ?>/images/page/<?=$banner->image?>" class="content_slid_img"/>
                </li>
            <?php endforeach ?>

        <ol class="dots">
            <li class="dot" onclick="toslide(1)">1</li>
            <li class="dot" onclick="toslide(2)">2</li>
            <li class="dot" onclick="toslide(3)">3</li>
            <li class="dot" onclick="toslide(4)">4</li>
        </ol>
    </div>

    <div class="absolute whiteline" style="height: 15px;bottom: 0px;z-index: 2">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -2px;z-index: 2;background-color:gray">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -1px;z-index: 2;background-color:white">
    </div>
    <div class="absolute whiteline" style="height: 15px;bottom: -17px;z-index: 2">
    </div>
</div>

<div class="container_wrapper">
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr"><?=$page->ctitle ?></div>
            <div><div>
                    <?=$page->cdesc1 ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
            <div><div>
                    <?=$page->cdesc2 ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
            <div><div>
                    <?=$page->cdesc3 ?>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>

    <div class="container_row">
        <div class="container_grid_content">
        </div>
        <div class="container_grid" id="pinterest_here">

            <div class="article_box">
                <div class="article_image" id="1">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand1.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box" id="2">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand2.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box" id="3">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand3.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box" id="4">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand4.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box" id="5">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand5.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand1.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand2.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand3.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand4.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand5.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand1.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand2.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand3.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand4.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand5.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand1.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand2.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand3.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand4.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand5.png" style="width: 203px;">
                </div>
            </div>
            <div class="article_box">
                <div class="article_image">
                    <img src="<?= Yii::app()->baseUrl ?>/images/brand1.png" style="width: 203px;">
                </div>
            </div>

        </div>
        <div class="container_grid_more_block">
            <div class="container_grid_more">
                <i class="container_grid_more_icon fa-li fa fa-angle-down"></i>
            </div>
        </div>
    </div>
</div>