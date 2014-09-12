<?php
/* @var $this CustomizationtypeController */
/* @var $model CustomizationType */

$this->breadcrumbs=array(
	'Customization Types'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CustomizationType', 'url'=>array('index')),
	array('label'=>'Create CustomizationType', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#customization-type-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Customization Types</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'customization-type-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        array(
            'name'=>'image',
            'type'=>'html',
            'value'=>'CHtml::image(Yii::app()->baseUrl . "/images/customization/". $data->image, "", array("width"=>150))',

        ),

        array(
            'name'=>'name_ru',
            'value'=>'$data->customization->name_ru',

        ),

		'customization_id',
		'name_ru',
		'name_en',

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
