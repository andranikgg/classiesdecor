<?php
/* @var $this CustomizationtypeController */
/* @var $data CustomizationType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customization_id')); ?>:</b>
	<?php echo CHtml::encode($data->customization->name_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_ru')); ?>:</b>
	<?php echo CHtml::encode($data->name_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_en')); ?>:</b>
	<?php echo CHtml::encode($data->name_en); ?>
	<br />

    <?php echo CHtml::image(Yii::app()->baseUrl .'/images/customization/' . $data->image, '',array('width'=>100)); ?>
    <br />


</div>