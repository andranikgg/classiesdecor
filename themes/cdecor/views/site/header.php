<?php
/* @var $this SiteController */
/* @var $news News[] */
/* @var $categories Categories[] */
/* @var $interior Interiers[] */
/* @var $menu Menu[] */

$lmanager = Yii::app()->urlManager;
$langs = $lmanager->getLanguageLinks();

$brands = Brand::model()->findAllByAttributes(array('status'=>1));

?>

<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/unslider.js"></script>


<script>
    $(function() {
        $('.banner').unslider();
    });
</script>

<div class="header">
    <div class="header_top">
        <div class="header_logo_block">
            <a href="<?= Yii::app()->baseUrl ?>">
                <div class="header_logo">
                </div>
            </a>
        </div>
        <div class="header_left_block">
            <div id="header_menu_home" class="header_top_menu_item">
                <a href="<?= Yii::app()->baseUrl ?>">
                    <?=Yii::t("menu", "main")?>
                </a>
            </div>
            <div class="vertical_line">
            </div>
            <div id="header_menu_home" class="header_top_menu_item">
                <a href="<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/partners">
                    <?=Yii::t("menu", "partners")?>
                </a>
            </div>
            <div class="vertical_line">
            </div>
            <div id="header_menu_contacts" class="header_top_menu_item">
                <a href="<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/contacts">
                    <?=Yii::t("menu", "contacts")?>
                </a>
            </div>
        </div>
        <div class="header_language_block" onmouseover="openLangBlock();" onmouseout="closeLangBlock();">
            <div class="header_lng_icon"><?=Yii::t("menu", $lmanager->getLanguageName())?>
                <div class="header_lng_icon_arrow_block"><i
                        class="header_lng_icon_arrow fa-li fa fa-angle-down"></i>
                </div>
            </div>
            <div class="dropdown-mask" onmouseout="closeLangBlock();">
                <div class="dropdown">
                    <h3><?=Yii::t("menu", "selectlanguage")?>
                        <div class="lang-map"></div>
                    </h3>
                    <ul class="language-list">
                        <?php foreach ($langs as $lang): ?>
                            <li class="ru hidden">
                                <a href="<?= $lang['url'] ?>">
                                    <div class="language"><i></i><?=Yii::t("menu", $lang['label'])?></div>
                                </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="absolute horizontal_line_1px" style="bottom: 1px;z-index: 2;background-color:gray">
        </div>
        <div class="absolute horizontal_line_1px shadowtop" style="bottom: 0px;z-index: 2;background-color:white">
        </div>
    </div>
    <div class="header_bottom">
        <div class="header_menu_center">

            <div id='header_menu'>
                <ul>
                    <li class='has-sub'><a href='<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/brands'><span><?=Yii::t("menu", "brands")?></span></a>
                        <ul>
                            <?php foreach ($brands as $brand):?>
                                <li><a href='<?=Yii::app()->baseUrl?>/brands/<?=$brand->id?>'><span><?=$brand->cname?></span></a></li>
                            <?php endforeach ?>

                            <li class='has-sub'><a href='#'><span>brand 2</span></a></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/products'><span><?=Yii::t("menu", "products")?></span></a>
                        <ul>
                            <?php foreach ($brands as $brand):?>
                                <?php if($brand->brandCategoryXrefs != null):?>
                                    <li class='has-sub'><a href='<?=Yii::app()->baseUrl?>/brands/<?=$brand->id?>'><span><?=$brand->cname?></span></a>
                                        <ul>
                                        <?php foreach($brand->brandCategoryXrefs as $category):?>
                                            <li><a href='<?=Yii::app()->baseUrl?>/category/<?=$category->id?>'><span><?=$category->cname?></span></a></li>
                                        <?php endforeach ?>
                                        </ul>
                                <?php else: ?>
                                    <li><a href='<?=Yii::app()->baseUrl?>/brands/<?=$brand->id?>'><span><?=$brand->cname?></span></a>
                                <?php endif ?>
                                    </li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                    <li class='last'><a href='<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/customization'><span><?=Yii::t("menu", "customization")?></span></a></li>
                </ul>
            </div>
            <div class="clear">
            </div>
        </div>
        <a href="<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/inspiration">
            <div class="header_menu_right">
                <div class="header_menu_right_item">
                    <?=Yii::t("menu", "inspiration")?>
                </div>
            </div>
        </a>
    </div>
</div>