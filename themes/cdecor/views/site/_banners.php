
<?php
/*echo "<pre>";
print_r($page);
exit;*/
?>

<div class="banner" id="page_banner">
    <ul id="banner_ul">
        <?php foreach($page->bannerImages as $banner): ?>
            <li>
                <img src="<?= Yii::app()->baseUrl ?>/images/page/<?=$banner->image?>" class="content_slid_img"/>
            </li>
        <?php endforeach ?>
    </ul>
    <ol class="dots">
        <?php $i = 1; foreach($page->bannerImages as $banner): ?>
            <li class="dot" onclick="toslide(<?=$i?>)"><?=$i?></li>
        <?php $i++; endforeach ?>
    </ol>
</div>