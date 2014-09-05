<?php
/* @var $this SiteController */
/* @var $news News[] */
/* @var $categories Categories[] */
/* @var $interior Interiers[] */
/* @var $menu Menu[] */

$lmanager = Yii::app()->urlManager;
$langs = $lmanager->getLanguageLinks();

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
                    <?=Yii::t("menu", "HOME")?>
                </a>
            </div>
            <div class="vertical_line">
            </div>
            <div id="header_menu_home" class="header_top_menu_item">
                <a href="<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/partners">
                    <?=Yii::t("menu", "PARTNERS")?>
                </a>
            </div>
            <div class="vertical_line">
            </div>
            <div id="header_menu_contacts" class="header_top_menu_item">
                <a href="<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/contacts">
                    <?=Yii::t("menu", "CONTACTS")?>
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
                    <li class='has-sub'><a href='<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/brands'><span>brands</span></a>
                        <ul>
                            <li><a href='#'><span>brand 1</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub brand</span></a></li>
                                    <li class='last'><a href='#'><span>Sub brand</span></a></li>
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>brand 2</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub brand</span></a></li>
                                    <li class='last'><a href='#'><span>Sub brand</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/products'><span>products</span></a>
                        <ul>
                            <li class='has-sub'><a href='#'><span>Product 1</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub Product</span></a></li>
                                    <li class='last'><a href='#'><span>Sub Product</span></a></li>
                                </ul>
                            </li>
                            <li class='has-sub'><a href='#'><span>Product 2</span></a>
                                <ul>
                                    <li><a href='#'><span>Sub Product</span></a></li>
                                    <li class='last'><a href='#'><span>Sub Product</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class='last'><a href='<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/customization'><span>customization</span></a></li>
                </ul>
            </div>
            <div class="clear">
            </div>
        </div>
        <a href="<?= Yii::app()->baseUrl . "/" . Yii::app()->language ?>/site/inspiration">
            <div class="header_menu_right">
                <div class="header_menu_right_item">
                    <?=Yii::t("menu", "INSPIRATION")?>
                </div>
            </div>
        </a>
    </div>
</div>