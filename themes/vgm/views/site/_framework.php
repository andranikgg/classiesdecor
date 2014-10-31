<a href="<?= Yii::app()->request->url ?>&id=<?= $data->id ?>">
    <div class="title">
        <?= $data->title ?>
    </div>
</a>
<div class="desc">
    <?= substr($data->content,0,100) ?>
</div>
<div class="horizontal_line_1px" style="background-color: #c7c7c7;">
</div>