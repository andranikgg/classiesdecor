<?php
/* @var $this SiteController */
/* @var $jobs Jobs[] */

/*echo "<pre>";
print_r($jobs->attributes);
exit;*/


Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/style/datepicker.css');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/style/bootstrap-select.css.map');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/style/bootstrap-select.css');
Yii::app()->clientScript->registerMetaTag('vgm', 'keywords');
Yii::app()->clientScript->registerMetaTag('vgm description', 'description');
Yii::app()->clientScript->registerMetaTag('vgm', null, null, array('property' => 'og:description'));
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap.min.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/bootstrap.min.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/bootstrap-datepicker.js');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/bootstrap-select.js');
$countrylist = Countries::model()->findAll();
$sectorlist = Sectors::model()->findAll();
?>

<script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/urlmanager.js"></script>

<script type="text/javascript">
    $(window).load(function () {

        $('.selectpicker').selectpicker({
            style: 'btn-info',
            size: 5
        });

        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });

//        var hash = $(location).attr('hash').substring(1);
//        if (hash !== "") {
//            showTab(hash);
//        }
//        else
//        {
//            showTab('jobsboard');
//        }

//        var hash = $(location).attr('hash').substring(1);
        var par_id = $.url().param('id');
        var par_block = $.url().param('block');
        if (par_block == "" || par_block == null || par_block == undefined) {
            showTab('jobsboard');
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
            <a href="?block=jobsboard">
                <div id="btn_jobsboard" class="left_menu_item">Jobs board</div>
            </a>
            <a href="?block=subscribe">
                <div id="btn_subscribe" class="left_menu_item">Subscribe</div>
            </a>
            <?php

            if (!Yii::app()->user->isGuest) {
                echo '
                  <a href="?block=addjob">
            <div id="btn_addjob" class="left_menu_item">Add job</div>
        </a>

          ';
            }
            ?>

        </div>
    </div>
    <div class="block_75per left">
        <div class="right_block">
            <div id="jobsboard" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">

                        <?php

                        Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiListView.update('jobslistview', {
        //this entire js section is taken from admin.php. w/only this line diff
        data: $(this).serialize()
    });
    return false;
});
");
                        ?>

                        <div class="grid_header">
                            <div class="item left block_15per right_margin_20 textcenter">
                                Posted
                            </div>
                            <div class="item left block_35per right_margin_20">
                                Title
                            </div>
                            <div class="item left block_22per right_margin_20">
                                Location
                            </div>
                            <div class="item left block_15per right_margin_20">
                                Deadline
                            </div>

                            <div class="clear">
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                        </div>

                        <?php $this->widget('zii.widgets.CListView', array(
                            'dataProvider' => Jobs::model()->search(),
                            'itemView' => '_jobs',
                            'id' => 'jobslistview', // must have id corresponding to js above
                                'sortableAttributes' => array(
                                    'posted',
                                    'title',
                                    'deadline',
                                ),
                            'summaryText' => false,
                        ));
                        ?>

                    </div>
                </div>
            </div>
            <div id="subscribe" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <form style="width: 60%" role="form"
                              action="<?= Yii::app()->baseUrl ?>/site/subscribe" method="post" id="form_subscribe"
                              name="subscribe-form">

                            <div class="form-group">
                                <label class="subtitle" for="email">Please subscribe to receive new job alerts</label><br/><br/>

                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="E-mail" required>
                                    <span class="input-group-addon"></span></div>
                            </div>
                            <input type="submit" name="submit" id="subscribe" value="Subscribe"
                                   class="btn btn-success pull-right">

                            <div class="clear">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="addjob" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <form name="job-form" style="width: 100%" role="form"
                              action="<?= Yii::app()->baseUrl ?>/site/Addjob" method="post" id="form_addjob">

                            <div class="form-group">
                                <label for="title">Title</label>

                                <div class="input-group">
                                    <input type="text" class="form-control" id="title" name="title"
                                           placeholder="Title" required>
                                    <span class="input-group-addon"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="desc">Description</label>

                                <div class="input-group">
                                    <textarea name="description" id="desc" class="form-control" rows="5"
                                              placeholder="Please enter jobs description" required
                                              style="resize: none"></textarea>
                                    <span class="input-group-addon"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="citizenship">Citizenship</label><br/>

                                <select class="selectpicker" multiple data-selected-text-format="count>2">
                                    <?php foreach ($countrylist as $country): ?>
                                        <option><?= $country->name ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="citizenship">Sector(s)</label><br/>

                                <select class="selectpicker" multiple data-selected-text-format="count>2">
                                    <?php foreach ($sectorlist as $sector): ?>
                                        <option><?= $sector->title ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title">Work experience</label>
                                <select id="work_experience" name="work_experience" class="form-control" style="width: 50%">
                                    <option value="0">No need experience</option>
                                    <option value="1">1-5 years</option>
                                    <option value="2">6-10 years</option>
                                    <option value="3">11-30 years</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="startdate">Start date</label><br/>
                                <input type="text" id="startdate" class="datepicker form-control" style="width: 50%"
                                       placeholder="Start date"
                                       name="posted">
                            </div>

                            <div class="form-group">
                                <label for="enddate">End date</label><br/>
                                <input type="text" id="enddate" class="datepicker form-control" style="width: 50%"
                                       placeholder="End date"
                                       name="deadline">
                            </div>

                            <input type="submit" name="submit" id="addjob" value="Add job"
                                   class="btn btn-success pull-right">

                            <div class="clear">
                            </div>

                        </form>
                    </div>
                </div>
            </div>


            <?php foreach ($jobs as $job): ?>

            <?php

                $work_experience = "";
                if ($job->work_experience == 0)
                    $work_experience = "No need experience";
                elseif ($job->work_experience == 1)
                    $work_experience = "1-5 years";
                elseif ($job->work_experience == 2)
                    $work_experience = "6-10 years";
                elseif ($job->work_experience == 3)
                    $work_experience = "11-30 years";


            $location_ids = Yii::app()->db->createCommand()
                ->select('locationid')
                ->from('jobs_location_xref')
                ->where('jobid=:id', array(':id' => $job->id))
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
                ->from('jobs_sector_xref')
                ->where('jobid=:id', array(':id' => $job->id))
                ->queryAll();

            $list_idss = array();
            foreach ($sector_ids as $item) {
                $list_idss[] = $item ['sectorid'];
            }

            $criteriasector = new CDbCriteria;
            $criteriasector->addInCondition('id', $list_idss);
            $sectors = Sectors::model()->findAll($criteriasector);
            ?>

                <div id="jobsboard_<?= $job->id ?>" class="container_block itemblock jobsboard_itemblock">
                    <div class="container_block_row">
                        <div class="content">
                            <div class="title">
                                <?= $job->title ?> <span style="margin-left: 20px"><a href="mailto:expert@vgmpartners.com"><img style="width: 25px;height: 20px;" src="<?= Yii::app()->baseUrl ?>/images/email1.png" </a></span>
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                            <div class="desc">
                                <span class="subtitle">Posted:</span>
                                <?= Yii::app()->dateFormatter->format( 'MMM dd, yyyy', $job->posted ) ?>
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
                                <span class="subtitle">Sector:</span>

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
                                <span class="subtitle">Deadline:</span>
                                <?= Yii::app()->dateFormatter->format( 'MMM dd, yyyy', $job->deadline ) ?>
                            </div>
                            <div class="desc">
                                <span class="subtitle">Work experience:</span>
                                <?=  $work_experience ?>
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                            <div class="desc">
                                <?= $job->description ?>
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