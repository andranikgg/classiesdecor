<?php
/* @var $this ExpertsLocationXrefController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Experts Location Xrefs',
);

$this->menu=array(
	array('label'=>'Create ExpertsLocationXref', 'url'=>array('create')),
	array('label'=>'Manage ExpertsLocationXref', 'url'=>array('admin')),
);
?>

<h1>Experts Location Xrefs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
