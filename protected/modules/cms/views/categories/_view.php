<?php
/* @var $this CategoriesController */
/* @var $data Categories */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('cat_id')); ?>:</b>
    <?php echo CHtml::encode($data->cat_id); ?>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_ru')); ?>:</b>
	<?php echo CHtml::encode($data->name_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_en')); ?>:</b>
	<?php echo CHtml::encode($data->name_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_de')); ?>:</b>
	<?php echo CHtml::encode($data->name_de); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name_it')); ?>:</b>
	<?php echo CHtml::encode($data->name_it); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_ru')); ?>:</b>
	<?php echo CHtml::encode($data->text_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_en')); ?>:</b>
	<?php echo CHtml::encode($data->text_en); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('text_de')); ?>:</b>
	<?php echo CHtml::encode($data->text_de); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_it')); ?>:</b>
	<?php echo CHtml::encode($data->text_it); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords_ru')); ?>:</b>
	<?php echo CHtml::encode($data->keywords_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords_en')); ?>:</b>
	<?php echo CHtml::encode($data->keywords_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords_de')); ?>:</b>
	<?php echo CHtml::encode($data->keywords_de); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords_it')); ?>:</b>
	<?php echo CHtml::encode($data->keywords_it); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mdescription_ru')); ?>:</b>
	<?php echo CHtml::encode($data->mdescription_ru); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mdescription_en')); ?>:</b>
	<?php echo CHtml::encode($data->mdescription_en); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mdescription_de')); ?>:</b>
	<?php echo CHtml::encode($data->mdescription_de); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mdescription_it')); ?>:</b>
	<?php echo CHtml::encode($data->mdescription_it); ?>
	<br />

	*/ ?>

</div>