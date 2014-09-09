<?php
/* @var $this CustomizationController */
/* @var $model Customization */

$this->breadcrumbs=array(
	'Customizations'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Customization', 'url'=>array('index')),
	array('label'=>'Create Customization', 'url'=>array('create')),
	array('label'=>'Update Customization', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Customization', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Customization', 'url'=>array('admin')),
);
?>

<h1>View Customization #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name_ru',
		'name_en',
		'desc_ru',
		'desc_en',
	),
)); ?>
