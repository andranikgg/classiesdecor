<?php
/* @var $this GalleryController */
/* @var $data Gallery */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title_ru')); ?>:</b>
    <?php echo CHtml::encode($data->title_ru); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('title_en')); ?>:</b>
    <?php echo CHtml::encode($data->title_en); ?>
    <br />

    <img src = "<?=Yii::app()->baseUrl?>/images/gallery/<?=$data->image?>" width="250px" />
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>