<?php
/* @var $this ProjectLocationXrefController */
/* @var $model ProjectLocationXref */

$this->breadcrumbs=array(
	'Project Location Xrefs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectLocationXref', 'url'=>array('index')),
	array('label'=>'Create ProjectLocationXref', 'url'=>array('create')),
	array('label'=>'View ProjectLocationXref', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectLocationXref', 'url'=>array('admin')),
);
?>

<h1>Update ProjectLocationXref <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>