<?php
/* @var $this CustomizationController */
/* @var $model Customization */

$this->breadcrumbs=array(
	'Customizations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Customization', 'url'=>array('index')),
	array('label'=>'Manage Customization', 'url'=>array('admin')),
);
?>

<h1>Create Customization</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>