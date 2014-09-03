<?php
/* @var $this SiteController */
/* @var $interior Inspiration[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));

?>


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
    <div class="container_row">
        INSPIRATION - There is no content!
    </div>
</div>
