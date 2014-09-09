<?php
/* @var $this SiteController */
/* @var $interior Partners[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));

//$page = 'interiers_text';
//$freetext = FreeText::model()->findByAttributes(array('page' => $page));

/*echo "<pre>";
print_r($partners);
exit;*/


?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/partners.css"/>


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

    <div class="container_row">

                    <?php foreach ( $partners as $partners):  ?>

        <div class="container_grid">

            <div class="container_grid_item_block left">
                <a href="<?=$partners->link ?>" target="_blank">
                    <div class="container_grid_item"
                                style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner/<?=$partners->image ?>')">

                    </div>
                </a>
            </div>
        </div>
                    <?php endforeach ?>


            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner2.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner3.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner2.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner3.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner2.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner3.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner1.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner2.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner3.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner2.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner3.png')"></div>
            </div>
            <div class="container_grid_item_block left">
                <div class="container_grid_item"
                     style="background-image: url('<?= Yii::app()->baseUrl ?>/images/partner2.png')"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>