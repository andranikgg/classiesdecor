<?php
/* @var $this PartnerController */
/* @var $data Partner */
?>

<div class="view">

	<img src = "<?=Yii::app()->baseUrl?>/images/partner/<?=$data->image?>" width="100px" />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::link($data->link, $data->link, array('target'=>'_blank')); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name_ru')); ?>:</b>
    <?php echo CHtml::encode($data->name_ru); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name_en')); ?>:</b>
    <?php echo CHtml::encode($data->name_en); ?>
    <br />



</div>