<?php
/* @var $this SiteController */
/* @var $interior Products[] */

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
            <li>
                <img src="<?= Yii::app()->baseUrl ?>/images/bg1.jpg" class="content_slid_img"/>
            </li>
            <li>
                <img src="<?= Yii::app()->baseUrl ?>/images/bg2.jpg" class="content_slid_img"/>
            </li>
            <li>
                <img src="<?= Yii::app()->baseUrl ?>/images/bg3.jpg" class="content_slid_img"/>
            </li>
            <li>
                <img src="<?= Yii::app()->baseUrl ?>/images/bg4.jpg" class="content_slid_img"/>
            </li>
        </ul>
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
            <div class="hdr">products - royalscot</div>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
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