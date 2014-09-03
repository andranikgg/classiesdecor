<?php
/* @var $this SiteController */
/* @var $brand Brand[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/brand.css"/>


<div class="container_grid_content_item">
    <div class="horizontal_line">
    </div>
    <div class="container_grid_content_img_block left">
        <a class="highslide" onclick="return hs.expand(this,{ slideshowGroup: 'group-<?= 1 ?>' })" href="<?= Yii::app()->baseUrl ?>/images/brandlarg1.png">
            <img src="<?= Yii::app()->baseUrl ?>/images/brandlarg1.png"/>
        </a>
    </div>
    <div class="container_grid_content_text_block left">
        <img src="<?= Yii::app()->baseUrl ?>/images/partner1.png" style="max-width: 100%;max-height: 110px;">
        <div class="hdr">model name</div>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="clear"></div>
    <div class="horizontal_line">
    </div>
</div>
<div class="clear"></div>
