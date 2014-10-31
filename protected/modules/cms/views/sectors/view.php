<?php
/* @var $this SectorsController */
/* @var $model Sectors */

$this->breadcrumbs=array(
	'Sectors'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Sectors', 'url'=>array('index')),
	array('label'=>'Create Sectors', 'url'=>array('create')),
	array('label'=>'Update Sectors', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Sectors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sectors', 'url'=>array('admin')),
);
?>

<h1>View Sectors #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'content',
	),
)); ?>
