<?php
/* @var $this SiteController */
/* @var $products Banner_Images[] */
/* @var $products Product[] */


Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));
?>

<div class="container_slider_block_home">
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
            <div class="hdr"><?= $page->ctitle ?></div>
            <div>
                <div>
                    <?= $page->cdesc1 ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
            <div>
                <div>
                    <?= $page->cdesc2 ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
            <div>
                <?= $page->cdesc3 ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</div>