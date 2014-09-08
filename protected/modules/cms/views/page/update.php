<?php
/* @var $this PageController */
/* @var $model Page */

    $this->layout = "column1";

    $pages = Page::model()->findAll();

?>

<script>
    var pageid = <?=$id?>;
</script>

<h1>Update Page <?php echo $model->ctitle; ?></h1>

<div id="page_menu">
    <ul>
        <?php foreach ($pages as $page) : ?>
            <li><a href="<?=Yii::app()->baseUrl . '/' . Yii::app()->language?>/cms/page/<?=$page->id?>"><?=$page->ctitle?></a></li>
        <?php endforeach ?>
    </ul>
</div>

<hr />
<center>
    <h2><?=$model->ctitle?></h2>
</center>
<?php $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?>