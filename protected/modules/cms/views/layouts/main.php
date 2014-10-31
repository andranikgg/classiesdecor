<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
          media="print"/>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css"
          media="screen, projection"/>
    <![endif]-->

    <script>
        var baseUrl = "<?=Yii::app()->baseUrl?>/site/";
    </script>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css"/>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css"/>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
                <div id="header">
            <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
        </div>
        <!-- header -->

        <div id="mainmenu">
            <?php $this->widget('zii.widgets.CMenu', array(
                'items' => array(
                    array('label' => Yii::t("menu", "main"), 'url' => array('/cms/main/index'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'About Us', 'url' => array('/cms/about/update/id/1'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Contacts', 'url' => array('/cms/contacts'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Policy', 'url' => array('/cms/policy'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Terms of use', 'url' => array('/cms/terms'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Banner images', 'url' => array('/cms/bannerimages'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Pages', 'url' => array('/cms/page'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Experts', 'url' => array('/cms/experts'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Jobs', 'url' => array('/cms/jobs'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'News', 'url' => array('/cms/news'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Frameworks', 'url' => array('/cms/frameworks'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Projects', 'url' => array('/cms/projects'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Sectors', 'url' => array('/cms/sectors'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Services', 'url' => array('/cms/services'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Countries', 'url' => array('/cms/countries'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Subscribers', 'url' => array('/cms/subscribers'), 'visible' => !Yii::app()->user->isGuest),
                    array('label' => 'Login', 'url' => array('/cms/main/login'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => Yii::t("menu", "Logout").' (' . Yii::app()->user->name . ')', 'url' => array('/cms/main/logout'), 'visible' => !Yii::app()->user->isGuest)
                ),
            )); ?>
        </div>
        <!-- mainmenu -->


<!--    array('label' => Yii::t("menu", "main"), 'url' => array('/cms/main/index'), 'visible' => !Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "page"), 'url' => array('/cms/page'), 'visible' => !Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "brands"), 'url' => array('/cms/brand'), 'visible' => !Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "products"), 'url' => array('/cms/product'), 'visible' => !Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "customization"), 'url' => array('/cms/customization'), 'visible' => !Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "cust_type"), 'url' => array('/cms/customizationtype'), 'visible' => !Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "partners"), 'url' => array('/cms/partner'), 'visible' => !Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "category"), 'url' => array('/cms/category'), 'visible' => !Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "inspiration"), 'url' => array('/cms/gallery'), 'visible' => !Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "contacts"), 'url' => array('/cms/contacts'), 'visible' => !Yii::app()->user->isGuest),

    array('label' => Yii::t("menu", "l_i"), 'url' => array('/cms/main/login'), 'visible' => Yii::app()->user->isGuest),
    array('label' => Yii::t("menu", "l_o").' (' . Yii::app()->user->name . ')', 'url' => array('/cms/main/logout'), 'visible' => !Yii::app()->user->isGuest)-->







        <?php echo $content; ?>

        <div class="clear"></div>

        <div id="footer">
            Copyright &copy; <?php echo date('Y'); ?> by gglaboratories.<br/>
            All Rights Reserved.<br/>
        </div>
        <!-- footer -->

    </div>
    <!-- page -->

</body>
</html>
