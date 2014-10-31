<?php
/* @var $this SectorsController */
/* @var $model Sectors */

$this->breadcrumbs=array(
	'Sectors'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sectors', 'url'=>array('index')),
	array('label'=>'Create Sectors', 'url'=>array('create')),
	array('label'=>'View Sectors', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Sectors', 'url'=>array('admin')),
);
?>

<h1>Update Sectors <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>