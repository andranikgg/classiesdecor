<?php
/* @var $this ExpertsLocationXrefController */
/* @var $model ExpertsLocationXref */

$this->breadcrumbs=array(
	'Experts Location Xrefs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ExpertsLocationXref', 'url'=>array('index')),
	array('label'=>'Create ExpertsLocationXref', 'url'=>array('create')),
	array('label'=>'View ExpertsLocationXref', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ExpertsLocationXref', 'url'=>array('admin')),
);
?>

<h1>Update ExpertsLocationXref <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>