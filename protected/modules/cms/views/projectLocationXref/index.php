<?php
/* @var $this ProjectLocationXrefController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Project Location Xrefs',
);

$this->menu=array(
	array('label'=>'Create ProjectLocationXref', 'url'=>array('create')),
	array('label'=>'Manage ProjectLocationXref', 'url'=>array('admin')),
);
?>

<h1>Project Location Xrefs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
