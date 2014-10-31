<?php
/* @var $this ProjectLocationXrefController */
/* @var $model ProjectLocationXref */

$this->breadcrumbs=array(
	'Project Location Xrefs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectLocationXref', 'url'=>array('index')),
	array('label'=>'Manage ProjectLocationXref', 'url'=>array('admin')),
);
?>

<h1>Create ProjectLocationXref</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>