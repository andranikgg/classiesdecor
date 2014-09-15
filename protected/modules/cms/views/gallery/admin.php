<?php
/* @var $this GalleryController */
/* @var $model Gallery */

$this->breadcrumbs=array(
	'Galleries'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Inspiration', 'url'=>array('index')),
	array('label'=>'Create Inspiration', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#gallery-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Inspiration</h1>

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
	'id'=>'gallery-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
        'title_ru',
        'title_en',
        array(
            'name'=>'image',
            'type'=>'html',
            'value'=>'CHtml::image(Yii::app()->baseUrl. "/images/gallery/". $data->image, "", array("width"=>"100"))',

        ),
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
