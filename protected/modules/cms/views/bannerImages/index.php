<?php
/* @var $this BannerImagesController */
/* @var $dataProvider CActiveDataProvider */


$this->menu=array(
	array('label'=>'Create BannerImages', 'url'=>array('create')),
	array('label'=>'Manage BannerImages', 'url'=>array('admin')),
);
?>

<h1>Banner Images</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
