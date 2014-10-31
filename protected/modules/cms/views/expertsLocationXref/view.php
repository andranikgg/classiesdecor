<?php
/* @var $this ExpertsLocationXrefController */
/* @var $model ExpertsLocationXref */

$this->breadcrumbs=array(
	'Experts Location Xrefs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ExpertsLocationXref', 'url'=>array('index')),
	array('label'=>'Create ExpertsLocationXref', 'url'=>array('create')),
	array('label'=>'Update ExpertsLocationXref', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ExpertsLocationXref', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExpertsLocationXref', 'url'=>array('admin')),
);
?>

<h1>View ExpertsLocationXref #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'expertid',
		'locationid',
	),
)); ?>
