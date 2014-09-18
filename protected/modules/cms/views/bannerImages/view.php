<?php
/* @var $this BannerImagesController */
/* @var $model BannerImages */

$this->menu=array(
	array('label'=>'List BannerImages', 'url'=>array('index')),
	array('label'=>'Create BannerImages', 'url'=>array('create')),
	array('label'=>'Update BannerImages', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BannerImages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BannerImages', 'url'=>array('admin')),
);
?>

<h1>View BannerImages #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'page_id',
		'image',
		'link',
	),
)); ?>
