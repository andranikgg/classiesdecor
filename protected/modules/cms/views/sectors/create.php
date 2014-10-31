<?php
/* @var $this SectorsController */
/* @var $model Sectors */

$this->breadcrumbs=array(
	'Sectors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sectors', 'url'=>array('index')),
	array('label'=>'Manage Sectors', 'url'=>array('admin')),
);
?>

<h1>Create Sectors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>