<div class="grid_row">
    <div class="desc item left block_15per right_margin_20 textcenter">

        <?= $data->posted ?>
    </div>

    <a href="<?= Yii::app()->request->url ?>&id=<?= $data->id ?>">
        <div class="title item left block_35per right_margin_20">
            <?= $data->title ?>
            <div class="desc">
                <?= substr($data->description, 0, 100) ?>
            </div>
        </div>
    </a>

    <div class="desc item left block_22per right_margin_20">
        <?= $data->title ?>
    </div>

    <div class="desc item left block_15per right_margin_20">
        <?= Yii::app()->dateFormatter->format( 'MMM dd, yyyy', $data->deadline ) ?>
    </div>

    <div class="clear">
    </div>
    <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
    </div>
</div>
