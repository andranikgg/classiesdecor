<?php
/* @var $this SiteController */

Yii::app()->clientScript->registerMetaTag('vgm', 'keywords');
Yii::app()->clientScript->registerMetaTag('vgm description', 'description');
Yii::app()->clientScript->registerMetaTag('vgm', null, null, array('property' => 'og:description'));

?>

<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/urlmanager.js"></script>

<script type="text/javascript">
    $(window).load(function () {
//        var hash = $(location).attr('hash').substring(1);
        var par_id = $.url().param('id');
        var par_block = $.url().param('block');
        if (par_block == "" || par_block == null || par_block == undefined) {
            showTab('services');
        }
        else {
            showTab(par_block);
            if (par_id != "" && par_id != null && par_id != undefined) {
                openItem(par_block, par_id);
            }
        }
    });

    function showTab(item) {
        $(".subblock").css("display", "none");
        $("#" + item).css("display", "block");
        $(".left_menu_item").attr("class", "left_menu_item");
        $("#btn_" + item).attr("class", "left_menu_item mselected");
    }

    function showdeskription(item) {
        var object = $(item).next();
        $(".text").each(function () {
            var t = $(this);
            if (t.is(':visible')) {
                t.css("display", "none");
            }
        });
        if (object.is(':visible')) {
            object.css("display", "none");
        }
        else {
            object.css("display", "block");
        }
    }

    function openItem(item1, item2) {
        $('#' + item1).hide();
        $("." + item1 + "_itemblock").css("display", "none");
        $("#" + item1 + "_" + item2).css("display", "block");
    }

</script>

<div class="container_wrapper">
    <div class="left_menu_block block_25per left">
        <div class="left_menu">
            <a href="?block=services">
                <div id="btn_services" class="left_menu_item">Services</div>
            </a>
            <a href="?block=sectors">
                <div id="btn_sectors" class="left_menu_item">Sectors</div>
            </a>
            <a href="?block=projects">
                <div id="btn_projects" class="left_menu_item">Projects</div>
            </a>
            <a href="?block=frameworks">
                <div id="btn_frameworks" class="left_menu_item">Frameworks</div>
            </a>
        </div>
    </div>
    <div class="block_75per left">
        <div class="right_block">
            <div id="services" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <?php foreach ($services as $service): ?>
                            <div class="title pointer" onclick="showdeskription(this)">
                                <?= $service->title ?>
                            </div>
                            <div class="text">
                                <?= substr($service->content, 0, 100) ?>
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div id="sectors" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <?php foreach ($sectors as $sector): ?>
                            <div class="title pointer" onclick="showdeskription(this)">
                                <?= $sector->title ?>
                            </div>
                            <div class="text">
                                <?= substr($sector->content, 0, 100) ?>
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div id="projects" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">

                        <div class="grid_header">
                            <div class="item left block_20per right_margin_20">
                                Sector
                            </div>
                            <div class="item left block_35per right_margin_20">
                                Title
                            </div>
                            <div class="item left block_20per right_margin_20">
                                Location
                            </div>
                            <div class="item left block_15per">
                                Date
                            </div>

                            <div class="clear">
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                        </div>

                        <?php
                        $this->widget('zii.widgets.CListView', array(
                            'dataProvider' => Projects::model()->search(),
                            'itemView' => '_project',
                            'enableHistory' => true,
                            'summaryText' => false,
                        ));
                        ?>
                    </div>
                </div>
            </div>
            <div id="frameworks" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <?php
                        $this->widget('zii.widgets.CListView', array(
                            'dataProvider' => Frameworks::model()->search(),
                            'itemView' => '_framework',
                            'enableHistory' => true,
                            'summaryText' => false,
                        ));
                        ?>
                    </div>
                </div>
            </div>


            <?php foreach ($projects as $project): ?>
                <?php
                    $location_ids = Yii::app()->db->createCommand()
                        ->select('locationid')
                        ->from('project_location_xref')
                        ->where('projectid=:id', array(':id' => $project->id))
                        ->queryAll();

                    $list_ids = array();
                    foreach ($location_ids as $item) {
                        $list_ids[] = $item ['locationid'];
                    }

                    $criteria = new CDbCriteria;
                    $criteria->addInCondition('id', $list_ids);
                    $countries = Countries::model()->findAll($criteria);

                $sector_ids = Yii::app()->db->createCommand()
                    ->select('sectorid')
                    ->from('project_sector_xref')
                    ->where('projectid=:id', array(':id' => $project->id))
                    ->queryAll();

                $list_ids = array();
                foreach ($sector_ids as $item) {
                    $list_ids[] = $item ['sectorid'];
                }

                $criteriasector = new CDbCriteria;
                $criteriasector->addInCondition('id', $list_ids);
                $sectors = Sectors::model()->findAll($criteriasector);
                ?>
                <div id="projects_<?= $project->id ?>" class="container_block itemblock projects_itemblock">
                    <div class="container_block_row">
                        <div class="content">
                            <div class="title">
                                <?= $project->title ?>
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                            <div class="desc">
                                <span class="subtitle">Country:</span>

                                <?php $i=0; $numItems = count($countries); foreach ($countries as $country): ?>
                                    <span>
                                        <?= $country->name ?>
                                        <?php if(++$i != $numItems) {
                                            echo "- ";
                                        } ?>
                                    </span>
                                <?php endforeach ?>

                            </div>
                            <div class="desc">
                                <span class="subtitle">Sector(s):</span>

                                <?php $i=0; $numItemsc = count($sectors); foreach ($sectors as $sector): ?>
                                    <span>
                                        <?= $sector->title ?>
                                        <?php if(++$i != $numItemsc) {
                                            echo "- ";
                                        } ?>
                                    </span>
                                <?php endforeach ?>
                            </div>
                            <div class="desc">
                                <span class="subtitle">Date:</span>
                                <?= Yii::app()->dateFormatter->format( 'MMM dd, yyyy', $project->startdate ) ?> -
                                <?= Yii::app()->dateFormatter->format( 'MMM dd, yyyy', $project->enddate ) ?>
                            </div>
                            <div class="desc">
                                <span class="subtitle">Client:</span> <?= $project->client ?>
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                            <div class="desc">
                                <?= $project->content ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>

            <?php foreach ($frameworks as $framework): ?>
                <div id="frameworks_<?= $framework->id ?>" class="container_block itemblock frameworks_itemblock">
                    <div class="container_block_row">
                        <div class="content">
                            <div class="title">
                                <?= $framework->title ?>
                            </div>
                            <div class="desc">
                                <?= $framework->content ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>


            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>