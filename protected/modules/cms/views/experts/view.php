<?php
/* @var $this ExpertsController */
/* @var $model Experts */

$this->breadcrumbs=array(
	'Experts'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Experts', 'url'=>array('index')),
	array('label'=>'Create Experts', 'url'=>array('create')),
	array('label'=>'Update Experts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Experts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Experts', 'url'=>array('admin')),
);
?>

<h1>View Experts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'firstname',
		'lastname',
		'email',
		'title',
		'cv',
		'password',
		'createdate',
	),
)); ?>
