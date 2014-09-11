<?php
/* @var $products Products[] */

/*echo "<pre>";
print_r($products);
exit;*/

?>



<div class="container_row">
    <div class="container_grid_content">
    </div>
    <div class="container_grid" id="pinterest_here">


        <?php foreach ($products as $product):?>
            <div class="article_box">
                <div class="article_image" id="<?=$product->id?>">
                    <img src="<?= Yii::app()->baseUrl ?>/images/product/<?=$product->image?>" style="width: 203px;">
                </div>
            </div>
        <?php endforeach ?>


    </div>
    <div class="container_grid_more_block">
        <div class="container_grid_more">
            <i class="container_grid_more_icon fa-li fa fa-angle-down"></i>
        </div>
    </div>
</div>