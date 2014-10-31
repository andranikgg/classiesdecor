<?php
/* @var $this ProjectSectorXrefController */
/* @var $model ProjectSectorXref */

$this->breadcrumbs=array(
	'Project Sector Xrefs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ProjectSectorXref', 'url'=>array('index')),
	array('label'=>'Create ProjectSectorXref', 'url'=>array('create')),
	array('label'=>'View ProjectSectorXref', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ProjectSectorXref', 'url'=>array('admin')),
);
?>

<h1>Update ProjectSectorXref <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>