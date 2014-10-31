<?php
/* @var $this ContactsController */
/* @var $model Contacts */

$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Contacts', 'url'=>array('index')),
	array('label'=>'Create Contacts', 'url'=>array('create')),
	array('label'=>'Update Contacts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contacts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contacts', 'url'=>array('admin')),
);
?>

<h1>View Contacts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'address',
		'address_coord_x',
		'address_coord_y',
		'worktime',
		'phone',
		'contact_email',
		'fb_link',
		'in_link',
		'tw_link',
		'feedback_email',
	),
)); ?>
