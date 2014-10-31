<?php
/* @var $this ProjectSectorXrefController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Project Sector Xrefs',
);

$this->menu=array(
	array('label'=>'Create ProjectSectorXref', 'url'=>array('create')),
	array('label'=>'Manage ProjectSectorXref', 'url'=>array('admin')),
);
?>

<h1>Project Sector Xrefs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
