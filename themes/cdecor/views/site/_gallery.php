<?php
/* @var $this SiteController */
/* @var $gallery Gallery[] */


?>

<script>
    $(function() {
        $('.banner').unslider();
    });

    $(document).ready(function(){
       $(".x_close").click(function(){
           $('.black').hide();
           $('.popup_outer').hide();
       });

    });

</script>

<div class="x_close">x</div>

<div class="banner">
    <ul id="banner_ul2">
        <?php foreach($gallery as $item): ?>
            <li>
                <img src="<?= Yii::app()->baseUrl ?>/images/gallery/<?=$item->image?>" class="content_slid_img"/>
                <div class="slide-title">sadfhs</div>
            </li>
        <?php endforeach ?>
    </ul>
    <ol class="dots">
        <?php $i = 1; foreach($gallery as $banner): ?>
            <li class="dot" onclick="toslide(<?=$i?>)"><?=$i?></li>
            <?php $i++; endforeach ?>
    </ol>
</div>