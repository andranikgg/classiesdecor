<?php
/* @var $this SiteController */
/* @var $interior Partners[] */
/* @var $page Page */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));

//$page = 'interiers_text';
//$freetext = FreeText::model()->findByAttributes(array('page' => $page));

/*echo "<pre>";
print_r($page->bannerImages);
exit;*/


?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/brands.css"/>
<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/pinterest.js"></script>
<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/brands.js"></script>
<script>
    var baseUrl = "<?=Yii::app()->baseUrl?>/<?=Yii::app()->language?>/site/";
</script>

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
            <div class="hdr"><?=$page->ctitle ?></div>
            <div>
                <?=$page->cdesc1 ?>
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
            <div>
                <?=$page->cdesc2 ?>
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
            <div>
                <?=$page->cdesc3 ?>
            </div>
        </div>
    </div>
    <div class="clear"></div>


    <?php $this->renderPartial('_products_part', array('products'=>$products)); ?>

</div>