<?php
/* @var $this ExpertsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Experts',
);

$this->menu=array(
	array('label'=>'Create Experts', 'url'=>array('create')),
	array('label'=>'Manage Experts', 'url'=>array('admin')),
);
?>

<h1>Experts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
