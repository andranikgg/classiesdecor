<?php
/* @var $this SiteController */
/* @var $brands Brands[] */

Yii::app()->clientScript->registerMetaTag('classis', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classis description', 'description');
Yii::app()->clientScript->registerMetaTag('Classis', null, null, array('property' => 'og:description'));
?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/brands.css"/>
<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/pinterest.js"></script>
<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/brands.js"></script>


<div class="container_slider_block_content">
    <?php $this->renderPartial('_banners', array('page'=>$page)); ?>

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

            <?php foreach($brands as $brand): ?>

                <div class="article_box">
                    <a href="<?=Yii::app()->baseUrl?>/<?=Yii::app()->language?>/site/brands/<?=$brand->id?>">
                        <div class="article_image" id="<?=$brand->id?>">
                            <img src="<?= Yii::app()->baseUrl ?>/images/brand/<?=$brand->image?>" style="width: 203px;">
                            </div>
                    </a>
                </div>
            <?php endforeach ?>


        </div>
        <div class="container_grid_more_block">
            <div class="container_grid_more">
                <i class="container_grid_more_icon fa-li fa fa-angle-down"></i>
            </div>
        </div>
    </div>
</div>