<?php
/* @var $this ProjectSectorXrefController */
/* @var $model ProjectSectorXref */

$this->breadcrumbs=array(
	'Project Sector Xrefs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ProjectSectorXref', 'url'=>array('index')),
	array('label'=>'Create ProjectSectorXref', 'url'=>array('create')),
	array('label'=>'Update ProjectSectorXref', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ProjectSectorXref', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ProjectSectorXref', 'url'=>array('admin')),
);
?>

<h1>View ProjectSectorXref #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'projectid',
		'sectorid',
	),
)); ?>
