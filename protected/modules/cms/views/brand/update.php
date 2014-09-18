<?php
/* @var $this BrandController */
/* @var $model Brand */


$this->menu=array(
	array('label'=>'List Brand', 'url'=>array('index')),
	array('label'=>'Create Brand', 'url'=>array('create')),
	array('label'=>'View Brand', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Brand', 'url'=>array('admin')),
);
?>

<h1><?=Yii::t("menu", "man")?> Brand <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>