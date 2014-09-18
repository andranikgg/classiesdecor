<?php
/* @var $this BannerImagesController */
/* @var $model BannerImages */

$this->breadcrumbs=array(
	'Banner Images'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BannerImages', 'url'=>array('index')),
	array('label'=>'Create BannerImages', 'url'=>array('create')),
	array('label'=>'View BannerImages', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BannerImages', 'url'=>array('admin')),
);
?>

<h1><?=Yii::t("menu", "man")?> BannerImages <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>