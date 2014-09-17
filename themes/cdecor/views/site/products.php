<?php
/* @var $this SiteController */
/* @var $brand Brand */
/* @var $product Products[] */

Yii::app()->clientScript->registerMetaTag('classis', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classis description', 'description');
Yii::app()->clientScript->registerMetaTag('Classis', null, null, array('property' => 'og:description'));


?>

<style>
    .container_block {
        float: left;
        width: 100%;
    }
</style>



<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/brands.css"/>
<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/pinterest.js"></script>
<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/brands.js"></script>


<div class="container_slider_block_content">
    <?php $this->renderPartial('_banners', array('page' => $page)); ?>

    <div class="absolute whiteline" style="height: 10px;bottom: 0px;z-index: 2">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -2px;z-index: 2;background-color:gray">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -1px;z-index: 2;background-color:white">
    </div>
    <div class="absolute whiteline" style="height: 10px;bottom: -12px;z-index: 2">
    </div>
</div>

<div class="container_wrapper">
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr"><?= $brand->cname ?></div>
            <div>
                <?= $brand->cdesc ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>

   <?php $this->renderPartial('_products_part', array('products'=>$brand->products)); ?>
</div>