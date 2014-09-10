<?php
/* @var $this SiteController */
/* @var $brand Brand */

?>


<div class="container_grid_content_item">
    <div class="horizontal_line">
    </div>
    <div class="container_grid_content_img_block left">
        <a class="highslide" onclick="return hs.expand(this,{ slideshowGroup: 'group-<?= 1 ?>' })" href="<?= Yii::app()->baseUrl ?>/images/product/<?=$product->image?>">
            <img src="<?= Yii::app()->baseUrl ?>/images/product/<?=$product->image?>"/>
        </a>
    </div>
    <div class="container_grid_content_text_block left">
        <img src="<?= Yii::app()->baseUrl ?>/images/brand/<?=$product->brand->image?>" style="max-width: 100%; max-height: 110px;">
        <div class="hdr"><?=$product->ctitle?></div>
        <?=$product->cdesc?>
    </div>
    <div class="clear"></div>
    <div class="horizontal_line">
    </div>
</div>
<div class="clear"></div>
