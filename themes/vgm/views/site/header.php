<?php
/* @var $this SiteController */
/* @var $news News[] */
/* @var $categories Categories[] */
/* @var $interior Interiers[] */
/* @var $menu Menu[] */
/* @var $banners BannerImages[] */

$banners = BannerImages::model()->findAll();

?>

<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/unslider.js"></script>


<script>
    $(function () {
        $('#page_banner').unslider();
    });
</script>

<div class="header">
    <div class="header_top">
        <div class="header_logo_container">
            <div class="header_logo_block left">
                <a href="<?= Yii::app()->baseUrl ?>">
                    <div class="header_logo">
                    </div>
                </a>
            </div>
            <div class="header_logo_right left">
                <p>we work for better future</p>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="header_menu_center">

            <div id='header_menu'>
                <?php $this->widget('zii.widgets.CMenu', array(
                    'activeCssClass' => 'header_menu_active',
                    'items' => array(
                        array('label' => 'Home', 'url' => array('site/index')),
                        array('label' => 'About us', 'url' => array('site/aboutus')),
                        array('label' => 'Expertise', 'url' => array('site/expertise')),
                        array('label' => 'Jobs', 'url' => array('/jobs?block=jobsboard')),
                        array('label' => 'Experts', 'url' => array('site/experts')),
                        array('label' => 'News', 'url' => array('site/news')),
                        array('label' => 'Contact us', 'url' => array('site/contactus')),
                        array('label' => 'Login', 'url' => array('site/login')),
                    ),
                )); ?>
            </div>
            <div class="clear">
            </div>
        </div>
    </div>
</div>

<div class="container_slider_block_home">

    <div class="banner" id="page_banner">
        <ul id="banner_ul">
            <?php foreach ($banners as $banner): ?>
                <li>
                    <img src="<?= Yii::app()->baseUrl ?>/images/gallery/<?= $banner->image ?>"
                         class="content_slid_img"/>
                </li>
            <?php endforeach ?>
        </ul>
        <ol class="dots">
            <?php $i = 1;
            foreach ($banners as $banner): ?>
                <li class="dot" onclick="toslide(<?= $i ?>)"><?= $i ?></li>
                <?php $i++; endforeach ?>
        </ol>
    </div>

    <div class="absolute whiteline" style="height: 10px;bottom: 0px;z-index: 2">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -2px;z-index: 2;background-color:gray">
    </div>
    <div class="absolute horizontal_line_1px" style="bottom: -1px;z-index: 2;background-color:white">
    </div>
    <!--    <div class="absolute whiteline" style="height: 10px;bottom: -12px;z-index: 2">-->
    <!--    </div>-->
</div>