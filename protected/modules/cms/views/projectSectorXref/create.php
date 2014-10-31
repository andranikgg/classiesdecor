<?php
/* @var $this ProjectSectorXrefController */
/* @var $model ProjectSectorXref */

$this->breadcrumbs=array(
	'Project Sector Xrefs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ProjectSectorXref', 'url'=>array('index')),
	array('label'=>'Manage ProjectSectorXref', 'url'=>array('admin')),
);
?>

<h1>Create ProjectSectorXref</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>