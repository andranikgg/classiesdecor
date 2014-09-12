<?php
/* @var $this SiteController */
/* @var $gallery Gallery[] */


?>

<script>
    $(function() {
        $('#ban').unslider();
    });

    $(document).ready(function(){

        //console.log("my consol "+appId);
       $(".x_close").click(function(){

           $('.black').hide();
           $('.popup_outer').hide();
           $('.popup').html("");

           $(function() {
               $('#page_banner').unslider();
           });

       });

    });


</script>

<div class="x_close"></div>

<div class="banner" id="ban">
    <ul id="banner_ul2">
        <?php foreach($gallery as $item): ?>
            <li>
                <img src="<?= Yii::app()->baseUrl ?>/images/gallery/<?=$item->image?>" class="content_slid_img"/>
                <div class="slide-title"><?=$item->ctitle?></div>
            </li>
        <?php endforeach ?>
    </ul>
    <ol class="dots">
        <?php $i = 1; foreach($gallery as $banner): ?>
            <li class="dot" onclick="toslide(<?=$i?>)"><?=$i?></li>
            <?php $i++; endforeach ?>
    </ol>
</div>