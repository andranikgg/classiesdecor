<?php
/* @var $this BrandController */
/* @var $model Brand */


$this->menu=array(
	array('label'=>'List Brand', 'url'=>array('index')),
	array('label'=>'Create Brand', 'url'=>array('create')),
	array('label'=>'Update Brand', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Brand', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Brand', 'url'=>array('admin')),
);
?>

<h1>View Brand #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name_ru',
		'name_en',
		'desc_ru:html',
		'desc_en:html',
        array(
            'label'=>'CollegeLogo',
            'type'=>'raw',
            'value'=>CHtml::image(Yii::app()->baseUrl."/images/brand/".$model->image, "", array('width'=>100)),

        ),
		'status',
	),
)); ?>
