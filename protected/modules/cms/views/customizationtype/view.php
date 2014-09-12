<?php
/* @var $this CustomizationtypeController */
/* @var $model CustomizationType */

$this->breadcrumbs=array(
	'Customization Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CustomizationType', 'url'=>array('index')),
	array('label'=>'Create CustomizationType', 'url'=>array('create')),
	array('label'=>'Update CustomizationType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CustomizationType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CustomizationType', 'url'=>array('admin')),
);
?>

<h1>View CustomizationType #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
        array(
            'label'=>'Customization',
            'value'=> $model->customization->name_ru,

        ),
		'name_ru',
		'name_en',
        array(
            'label'=>'Photo',
            'type'=>'raw',
            'value'=>CHtml::image(Yii::app()->baseUrl."/images/customization/".$model->image, "", array('width'=>100)),

        ),
	),
)); ?>
