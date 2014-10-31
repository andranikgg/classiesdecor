<?php
/* @var $this ExpertsController */
/* @var $model Experts */

$this->breadcrumbs=array(
	'Experts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Experts', 'url'=>array('index')),
	array('label'=>'Manage Experts', 'url'=>array('admin')),
);
?>

<h1>Create Experts</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>