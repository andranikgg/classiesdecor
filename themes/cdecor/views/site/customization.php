<?php
/* @var $this SiteController */
/* @var $interior Customization[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));


?>

<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/customization.js"></script>


<div class="container_slider_block_content">
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
        <div class="hdr">customization</div>
        <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
        </div>
    </div>
</div>
<div class="container_block">
    <div class="container_block_content">
        <div class="hdr">&nbsp;</div>
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
        </ul>
    </div>
</div>
<div class="container_block">
    <div class="container_block_content">
        <div class="hdr">&nbsp;</div>
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
        </ul>
    </div>
</div>
<div class="clear"></div>

<div class="container_row">
<div class="container_cust_menu">
    <div class="container_cust_menu_item container_cust_menu_item_selected left" menu="1">
        lightings
    </div>
    <div class="container_cust_menu_item left" menu="2">
        furnitures
    </div>
    <div class="container_cust_menu_item left" menu="3">
        curtains
    </div>
    <div class="container_cust_menu_item left" menu="4">
        fabrics
    </div>
    <div class="clear"></div>
</div>
<div id="cust_block_1" class="container_cust_block" block="1">
<div class="container_cust_submenu">
    <div class="container_cust_submenu_item_first bold left">
        learn about &nbsp;&nbsp;-
    </div>
    <div class="container_cust_submenu_item container_cust_submenu_item_selected left" menu="1">
        color
    </div>
    <div class="container_cust_submenu_item left" menu="2">
        shape
    </div>
    <div class="container_cust_submenu_item left" menu="3">
        metal
    </div>
    <div class="container_cust_submenu_item left" menu="4">
        size
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_1_1" class="container_cust_content">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_1_2" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_1_3" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_1_4" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
</div>
<div id="cust_block_2" class="container_cust_block" block="2" style="display: none">
<div class="container_cust_submenu">
    <div class="container_cust_submenu_item_first bold left">
        learn about &nbsp;&nbsp;-
    </div>
    <div class="container_cust_submenu_item container_cust_submenu_item_selected left" menu="1">
        color
    </div>
    <div class="container_cust_submenu_item left" menu="2">
        shape
    </div>
    <div class="container_cust_submenu_item left" menu="3">
        metal
    </div>
    <div class="container_cust_submenu_item left" menu="4">
        size
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_2_1" class="container_cust_content">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_2_2" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_2_3" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_2_4" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
</div>
<div id="cust_block_3" class="container_cust_block" block="3" style="display: none">
<div class="container_cust_submenu">
    <div class="container_cust_submenu_item_first bold left">
        learn about &nbsp;&nbsp;-
    </div>
    <div class="container_cust_submenu_item container_cust_submenu_item_selected left" menu="1">
        color
    </div>
    <div class="container_cust_submenu_item left" menu="2">
        shape
    </div>
    <div class="container_cust_submenu_item left" menu="3">
        metal
    </div>
    <div class="container_cust_submenu_item left" menu="4">
        size
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_3_1" class="container_cust_content">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_3_2" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_3_3" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_3_4" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
</div>
<div id="cust_block_4" class="container_cust_block" block="4" style="display: none">
<div class="container_cust_submenu">
    <div class="container_cust_submenu_item_first bold left">
        learn about &nbsp;&nbsp;-
    </div>
    <div class="container_cust_submenu_item container_cust_submenu_item_selected left" menu="1">
        color
    </div>
    <div class="container_cust_submenu_item left" menu="2">
        shape
    </div>
    <div class="container_cust_submenu_item left" menu="3">
        metal
    </div>
    <div class="container_cust_submenu_item left" menu="4">
        size
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_4_1" class="container_cust_content">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_4_2" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_4_3" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
<div id="cust_content_4_4" class="container_cust_content" style="display: none">
    <div class="container_cust_content_item_block block_20per left">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
        scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
        Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
        Aldus PageMaker including versions of Lorem Ipsum.
    </div>
    <div class="container_cust_content_item_block block_20per left" style="padding: 0 0 0 20px;">
        <img src="<?= Yii::app()->baseUrl ?>/images/cust1.png" style="width: 100%;"/>
    </div>
    <div class="container_cust_content_item_block block_60per left" style="padding: 0 0 0 50px;">
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust2.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust5.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust6.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust3.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="container_cust_content_item left">
            <div class="container_cust_content_item_im_block">
                <img src="<?= Yii::app()->baseUrl ?>/images/cust4.png"/>
            </div>
            <div class="container_cust_content_item_text_block">
                #1
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>
</div>
</div>
</div>