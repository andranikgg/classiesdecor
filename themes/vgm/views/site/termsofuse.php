<?php
/* @var $this SiteController */
/* @var $terms Terms[] */

Yii::app()->clientScript->registerMetaTag('vgm', 'keywords');
Yii::app()->clientScript->registerMetaTag('vgm description', 'description');
Yii::app()->clientScript->registerMetaTag('vgm', null, null, array('property' => 'og:description'));

?>

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/contact.css"/>


<div class="container_wrapper">
        <div class="container_block_row">
            <div class="hdr">Terms of use</div>
            <div class="content paddind_10">
                <?= $terms->content ?>
            </div>
        </div>
</div>