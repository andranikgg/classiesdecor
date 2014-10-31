<?php
/* @var $this SiteController */
/* @var $experts Experts[] */

$policy = Policy::model()->findByPk(1);

Yii::app()->clientScript->registerMetaTag('vgm', 'keywords');
Yii::app()->clientScript->registerMetaTag('vgm description', 'description');
Yii::app()->clientScript->registerMetaTag('vgm', null, null, array('property' => 'og:description'));
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/bootstrap.min.css');
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/scripts/bootstrap.min.js');
?>

<script type="text/javascript">
    $(window).load(function () {
        var hash = $(location).attr('hash').substring(1);
        if (hash !== "") {
            showTab(hash);
        }
        else {
            showTab('registerexperts');
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

</script>

<div class="container_wrapper">
    <div class="left_menu_block block_25per left">
        <div class="left_menu">
            <a href="#registerexperts" onclick="showTab('registerexperts')">
                <div id="btn_registerexperts" class="left_menu_item mselected">Register as an expert</div>
            </a>
            <a href="#policy" onclick="showTab('policy')">
                <div id="btn_policy" class="left_menu_item">Policy</div>
            </a>

            <?php

            if (!Yii::app()->user->isGuest) {
                echo '
            <a href="#expertsboard" onclick="showTab(\'expertsboard\')">
                <div id="btn_expertsboard" class="left_menu_item">Experts board</div>
            </a>
          ';
            }
            ?>


        </div>
    </div>
    <div class="block_75per left">
        <div class="right_block">
            <div id="registerexperts" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <form style="width: 50%" role="form" action="<?= Yii::app()->baseUrl ?>/site/Registerexpert"
                              method="post" id="form_susbmit">

                            <div class="form-group">
                                <label for="title">Title</label>
                                <select id="title" name="title" class="form-control">
                                    <option value="1">Mr.</option>
                                    <option value="2">Ms.</option>
                                    <option value="3">Mrs.</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="firstname">First Name</label>

                                <div class="input-group">
                                    <input type="text" class="form-control" id="firstname" name="firstname"
                                           placeholder="Enter your first name" required>
                                    <span class="input-group-addon"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="lastname">Last Name</label>

                                <div class="input-group">
                                    <input type="text" class="form-control" id="lastname" name="lastname"
                                           placeholder="Enter your last name" required>
                                    <span class="input-group-addon"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="InputEmail">E-mail</label>

                                <div class="input-group">
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Enter your E-mail" required>
                                    <span class="input-group-addon"></span></div>
                            </div>

                            <div class="form-group">
                                <label for="title">Work experience</label>
                                <select id="work_experience" name="work_experience" class="form-control">
                                    <option value="0">No experience</option>
                                    <option value="1">1-5 years</option>
                                    <option value="2">6-10 years</option>
                                    <option value="3">11-30 years</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="citizenship">Citizenship</label>

                                <?=
                                CHtml::dropDownList(
                                    'country',
                                    'select',
                                    CHtml::listData(Countries::model()->findAll(), 'id', 'name'),
                                    array('class' => 'form-control',
                                        'empty' => 'Select country',
                                    )
                                );
                                ?>

                            </div>

                            <div class="form-group">
                                <label for="citizenship">CV</label>
                                <input id="cv" name="cv" type="file" class="filestyle " data-input="false">

                            </div>
                            <input type="submit" name="submit" id="submit" value="Register"
                                   class="btn btn-success pull-right">

                            <div class="clear">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div id="expertsboard" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">

                        <?php

                        Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiListView.update('expertslistview', {
        //this entire js section is taken from admin.php. w/only this line diff
        data: $(this).serialize()
    });
    return false;
});
");
                        ?>

                        <div class="grid_header">
                            <div class="item left block_10per right_margin_20">
                                Modified
                            </div>
                            <div class="item left block_20per right_margin_20">
                                Name
                            </div>
                            <div class="item left block_15per right_margin_20">
                                Email
                            </div>
                            <div class="item left block_20per right_margin_20">
                                Citizenship
                            </div>
                            <div class="item left block_14per right_margin_20">
                                Experience
                            </div>
                            <div class="item left block_5per ">
                                CV
                            </div>

                            <div class="clear">
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                        </div>


                        <?php $this->widget('zii.widgets.CListView', array(
                            'dataProvider' => Experts::model()->search(),
                            'itemView' => '_experts',
                            'id' => 'expertslistview', // must have id corresponding to js above
                                'sortableAttributes' => array(
                                    'createdate',
                                    'firstname',
                                    'lastname',
                                    'email',
                                ),
                            'summaryText' => false,

                        ));
                        ?>

                    </div>
                </div>
            </div>
            <div id="policy" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content">
                        <div class="desc">
                            <?= $policy->content ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>