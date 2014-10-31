<?php
/* @var $this BannerImagesController */
/* @var $data BannerImages */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('image')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->image); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('link')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->link); ?>
<!--	<br />-->

    <img src = "<?=Yii::app()->baseUrl?>/images/gallery/<?=$data->image?>" width="250px" />
    <br />

</div>