<?php
/* @var $this ExpertsLocationXrefController */
/* @var $model ExpertsLocationXref */

$this->breadcrumbs=array(
	'Experts Location Xrefs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExpertsLocationXref', 'url'=>array('index')),
	array('label'=>'Manage ExpertsLocationXref', 'url'=>array('admin')),
);
?>

<h1>Create ExpertsLocationXref</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>