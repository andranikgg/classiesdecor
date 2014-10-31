<?php
/* @var $this SubscribersController */
/* @var $model Subscribers */

$this->breadcrumbs=array(
	'Subscribers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Subscribers', 'url'=>array('index')),
	array('label'=>'Create Subscribers', 'url'=>array('create')),
	array('label'=>'Update Subscribers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Subscribers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subscribers', 'url'=>array('admin')),
);
?>

<h1>View Subscribers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'email',
		'status',
		'createdate',
	),
)); ?>
