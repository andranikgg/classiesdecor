<?php
/* @var $this SiteController */

$contact = Contacts::model()->findByPk(1);

Yii::app()->clientScript->registerMetaTag('vgm', 'keywords');
Yii::app()->clientScript->registerMetaTag('vgm description', 'description');
Yii::app()->clientScript->registerMetaTag('vgm', null, null, array('property' => 'og:description'));
?>

<div class="container_wrapper blocks_1">
    <div class="container_row_item blocks_3 left">
        <div class="container_block_content_feed">
            <div class="hdr">News</div>
            <div class="content">
                <?php foreach ($news as $newsitem): ?>
                    <a href="<?= Yii::app()->baseUrl ?>/news#<?= $newsitem->id ?>">
                        <div class="title">
                            <?= $newsitem->title ?>
                        </div>
                    </a>
                    <div class="text">
                        <?= substr($newsitem->content, 0, 100) ?>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="more">
                <a href="<?= Yii::app()->baseUrl ?>/news">see more...</a>
            </div>
        </div>
    </div>
    <div class="container_row_item blocks_3 left">
        <div class="container_block_content_feed">
            <div class="hdr">Jobs</div>
            <div class="content">
                <?php foreach ($jobs as $job): ?>
                    <a href="<?= Yii::app()->baseUrl ?>/jobs?block=jobsboard&id=<?= $job->id ?>">
                        <div class="title">
                            <?= $job->title ?>
                        </div>
                    </a>
                    <div class="text">
                        <?= substr($job->description, 0, 100) ?>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="more">
                <a href="<?= Yii::app()->baseUrl ?>/jobs?block=jobsboard">see more...</a>
            </div>
        </div>
    </div>
    <div class="container_row_item blocks_3 left">
        <div class="container_block_content_feed">
            <div class="hdr">Apply</div>
            <div class="content">
                <?php foreach ($frameworks as $framework): ?>
                    <a href="<?= Yii::app()->baseUrl ?>/expertise?block=frameworks&id=<?= $framework->id ?>">
                        <div class="title">
                            <?= $framework->title ?>
                        </div>
                    </a>
                    <div class="text">
                        <?= substr($framework->content, 0, 100) ?>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="more">
                <a href="<?= Yii::app()->baseUrl ?>/expertise?block=frameworks">see more...</a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <br/>

    <div class="container_row_item" style="width: 520px;margin: 0 auto;">
        <div class="left">
            <div class="job_button">
                <a href="<?= Yii::app()->baseUrl ?>/jobs?block=subscribe">
                    <div class="button">
                        Subscribe to our job reports
                    </div>
                </a>
            </div>
        </div>
        <div class="left">
            <div class="job_button">
                <a href="<?= Yii::app()->baseUrl ?>/experts#registerexperts">
                    <div class="button">
                        Register into our experts database
                    </div>
                </a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <br/>

    <div class="container_row_item" style="margin: 30px auto;">
        <div class="blocks_4 left">
            <div class="container_block_content">
                <div class="header_logo">
                </div>
            </div>
        </div>
        <div class="blocks_4 left">
            <div class="container_block_content">
                <div class="header_logo">
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>