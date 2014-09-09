<?php
/* @var $this SiteController */
/* @var $products Product[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));
?>

<div class="container_slider_block_home">
    <div class="banner">
        <ul id="banner_ul">

            <?php foreach($page->bannerImages as $banner): ?>
                <li>
                    <img src="<?= Yii::app()->baseUrl ?>/images/page/<?=$banner->image?>" class="content_slid_img"/>
                </li>
            <?php endforeach ?>


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
            <div class="hdr">about classies</div>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
            <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">services</div>
            <ul>
                <li>
                    <span class="list_point"></span>
                    <span class="leftpaddind_20 left">Free decor consultation at your home</span>

                    <div class="clear"></div>
                </li>
                <li>
                    <span class="list_point"></span>
                    <span class="leftpaddind_20 left">3D design of your customized item</span>

                    <div class="clear"></div>
                </li>
                <li>
                    <span class="list_point"></span>
                    <span class="leftpaddind_20 left">Free decor consultation at your home</span>

                    <div class="clear"></div>
                </li>
                <li>
                    <span class="list_point"></span>
                    <span class="leftpaddind_20 left">3D design of your customized item</span>

                    <div class="clear"></div>
                </li>
                <li>
                    <span class="list_point"></span>
                    <span class="leftpaddind_20 left">Free decor consultation at your home</span>

                    <div class="clear"></div>
                </li>
                <li>
                    <span class="list_point"></span>
                    <span class="leftpaddind_20 left">3D design of your customized item</span>

                    <div class="clear"></div>
                </li>
                <li>
                    <span class="list_point"></span>
                    <span class="leftpaddind_20 left">Free decor consultation at your home</span>

                    <div class="clear"></div>
                </li>
                <li>
                    <span class="list_point"></span>
                    <span class="leftpaddind_20 left">3D design of your customized item</span>

                    <div class="clear"></div>
                </li>
                <li>
                    <div class="right"><a class="more" href='#'>more...</a></div>
                    <div class="clear"></div>
                </li>


            </ul>
        </div>
    </div>
    <div class="clear"></div>
</div>