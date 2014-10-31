<?php
/* @var $this SiteController */
/* @var $news News[] */


Yii::app()->clientScript->registerMetaTag('vgm', 'keywords');
Yii::app()->clientScript->registerMetaTag('vgm description', 'description');
Yii::app()->clientScript->registerMetaTag('vgm', null, null, array('property' => 'og:description'));
?>

<script type="text/javascript">
    $(window).load(function(){
        var hash = $(location).attr('hash').substring(1);
        if(hash !== "")
        {
            showTab(hash);
        }
        else
        {
            showTab('news_intro');
        }
    });

    function showTab(item) {
        $(".subblock").css("display","none");
        $("#" + item).css("display","block");
        $(".left_menu_item").attr("class","left_menu_item");
        $("#btn_" + item).attr("class","left_menu_item mselected");
    }

    function showdeskription(item) {
        var object = $(item).next();
        if(object.is(':visible'))
        {
            object.css("display","none");
        }
        else
        {
            object.css("display","block");
        }
    }

</script>

<div class="container_wrapper">
    <div class="left_menu_block block_25per left">
        <div class="left_menu pagingblock">
            <div class="hdr">News feed</div>
            <?php foreach ($news as $newsitem): ?>
                <a href="#<?= $newsitem->id ?>" onclick="showTab('<?= $newsitem->id ?>')">
                    <div id="btn_<?= $newsitem->id ?>" class="left_menu_item mselected">
                        <div class="title">
                            <?= $newsitem->title ?>
                        </div>
                        <div class="desc">
                            <?= $newsitem->content ?>
                        </div>
                    </div>
                </a>
                <div class="clear">
                </div>
                <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                </div>
            <?php endforeach ?>
            <?php
                $this->widget('CLinkPager',array(
                    'pages'=>$pages,
                    'id' =>'mypager',
                    'cssFile' => Yii::app()->request->baseUrl."/style/pager.css",
                    'header'=>false,
                    'prevPageLabel'=>'',
                    'nextPageLabel'=>'',
                    'lastPageLabel'=>'',
                    'firstPageLabel'=>'',
                ));
            ?>

<!--            <a href="#services" onclick="showTab('services')">-->
<!--                <div id="btn_services" class="left_menu_item mselected">Services</div>-->
<!--            </a>-->
<!--            <a href="#sectors" onclick="showTab('sectors')">-->
<!--                <div id="btn_sectors" class="left_menu_item">Sectors</div>-->
<!--            </a>-->
<!--            <a href="#projects" onclick="showTab('projects')">-->
<!--                <div id="btn_projects" class="left_menu_item">Projects</div>-->
<!--            </a>-->
<!--            <a href="#frameworks" onclick="showTab('frameworks')">-->
<!--                <div id="btn_frameworks" class="left_menu_item">Frameworks</div>-->
<!--            </a>-->
        </div>
    </div>
    <div class="block_75per left">
        <div class="right_block">
            <?php foreach ($news as $newsitem): ?>
            <div id="<?= $newsitem->id ?>" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content paddind_10">
                            <div class="title">
                                <?= $newsitem->title ?>
                            </div>
                            <div class="desc">
                                <?= $newsitem->content ?>
                            </div>
                            <div class="clear">
                            </div>
                            <div class="horizontal_line_1px" style="background-color: #c7c7c7;">
                            </div>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
            <div id="news_intro" class="container_block subblock">
                <div class="container_block_row">
                    <div class="content paddind_10">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>