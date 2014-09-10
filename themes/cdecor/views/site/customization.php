<?php
/* @var $this SiteController */
/* @var $customizations Customization[] */

Yii::app()->clientScript->registerMetaTag('classies, decor', 'keywords');
Yii::app()->clientScript->registerMetaTag('Classies Decor description', 'description');
Yii::app()->clientScript->registerMetaTag('Classies Decor', null, null, array('property' => 'og:description'));



?>

<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/customization.js"></script>


<div class="container_slider_block_content">

    <?php $this->renderPartial('_banners', array('page' => $page)); ?>

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
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>

        </div>
    </div>
    <div class="container_block">
        <div class="container_block_content">
            <div class="hdr">&nbsp;</div>
        </div>
    </div>
    <div class="clear"></div>

    <div class="container_row">
        <div class="container_cust_menu">

            <?php $i = 1;
            foreach ($customizations as $customization): ?>
        <?php if ($i == 1): ?>
            <div class="container_cust_menu_item container_cust_menu_item_selected left"
                 menu="<?= $customization->id ?>">
                <?php else: ?>
                <div class="container_cust_menu_item left" menu="<?= $customization->id ?>">
                    <?php endif ?>
                    <?= $customization->cname ?>
                </div>
                <?php $i++;
                endforeach ?>
                <div class="clear"></div>
            </div>


            <?php
            $i = 1;
            $isvisible = "display: none";
            foreach ($customizations as $customization): ?>
            <?php if ($i == 1)
                        $isvisible = "display: block";
                    else
                        $isvisible = "display: none";
            $i++;
                ?>

            <div id="cust_block_<?= $customization->id ?>" class="container_cust_block" block="<?= $customization->id ?>" style="<?= $isvisible ?>">
                <div class="container_cust_submenu">
                    <div class="container_cust_submenu_item_first bold left">
                        learn about &nbsp;&nbsp;-
                    </div>

                    <?php
                    $i2 = 1;
                    foreach ($customization->customizationTypes as $type): ?>
                        <?php if ($i2 == 1): ?>
                            <div class="container_cust_submenu_item container_cust_submenu_item_selected left"
                                 menu="<?= $type->id ?>">
                                <?= $type->cname ?>
                            </div>
                        <?php else: ?>
                            <div class="container_cust_submenu_item left" menu="<?= $type->id ?>">
                                <?= $type->cname ?>
                            </div>
                        <?php endif ?>
                        <?php $i2++; endforeach ?>

                    <div class="clear"></div>

                </div>


                <?php
                $i3 = 1;
                foreach ($customization->customizationTypes as $type): ?>
                    <?php if ($i3 == 1): ?>
                        <div id="cust_content_<?= $customization->id ?>_<?= $type->id ?>"
                             class="container_cust_content">
                            <div class="container_cust_content_item_block block_20per left">
                                <?= $customization->cdesc ?>
                            </div>
                            <div class="container_cust_content_item_block block_80per left"
                                 style="padding: 0 0 0 20px;">
                                <img src="<?= Yii::app()->baseUrl ?>/images/customization/<?= $type->image ?>"/>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php else: ?>
                        <div id="cust_content_<?= $customization->id ?>_<?= $type->id ?>" class="container_cust_content"
                             style="display: none">
                            <div class="container_cust_content_item_block block_20per left">
                                <?= $customization->cdesc ?>
                            </div>
                            <div class="container_cust_content_item_block block_80per left"
                                 style="padding: 0 0 0 20px;">
                                <img src="<?= Yii::app()->baseUrl ?>/images/customization/<?= $type->image ?>"/>
                            </div>
                            <div class="clear"></div>
                        </div>
                    <?php endif ?>

                    <?php $i3++; endforeach ?>
            </div>
                <?php endforeach ?>


                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>