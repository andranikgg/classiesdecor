<?php
/* @var $this ExpertsController */
/* @var $model Experts */

$this->breadcrumbs=array(
	'Experts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Experts', 'url'=>array('index')),
	array('label'=>'Create Experts', 'url'=>array('create')),
	array('label'=>'View Experts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Experts', 'url'=>array('admin')),
);
?>

<h1>Update Experts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>