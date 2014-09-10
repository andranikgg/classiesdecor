<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/jquery-1.11.1.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="robots" content="NOODP">
    <meta name="googlebot" content="NOODP, nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="cleartype" content="on">
    <meta name="language" content="en"/>


    <!--    Styles    -->
    <link rel="shortcut icon" href="<?php echo Yii::app()->request->baseUrl; ?>/css/images/favicon.ico"
          type="image/x-icon"/>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/cdecor.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/header.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/container.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/footer.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/slider.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/style/menu.css"/>
    <link rel="stylesheet" type="text/css"
          href="<?php echo Yii::app()->request->baseUrl; ?>/style/font-awesome-4.1.0/css/font-awesome.min.css"/>
    <link href="<?= Yii::app()->request->baseUrl ?>/highslide/highslide.css" rel="stylesheet" type="text/css"/>

    <!--    Scripts    -->
    <script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/header_menu.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/scripts/cdecor.js"></script>
    <script src="<?= Yii::app()->request->baseUrl ?>/highslide/highslide-full.js" type="text/javascript"></script>
    <script type="text/javascript">var lang = "<?=Yii::app()->language?>";</script>

    <!--    Popup for image-->
    <script type="text/javascript">
        hs.graphicsDir = '<?= Yii::app()->request->baseUrl ?>/highslide/graphics/';
        hs.align = 'center';
        hs.transitions = ['expand', 'crossfade'];
        hs.outlineType = 'rounded-white';
        hs.fadeInOut = true;
        hs.dimmingOpacity = 0.75;

        // define the restraining box
        hs.useBox = true;
        hs.width = 600;
        hs.height = 400;

        // Add the controlbar
        hs.addSlideshow({
            //slideshowGroup: 'group1',
            interval: 5000,
            repeat: false,
            useControls: true,
            fixedControls: 'fit',
            overlayOptions: {
                opacity: 1,
                position: 'bottom center',
                hideOnMouseOut: true
            }
        });
    </script>
</head>

<body>
<div class="main_wrapper">
    <?php $this->renderPartial('header', false); ?>
    <div class="container">
        <?php echo $content; ?>
    </div>
    <?php $this->renderPartial('footer', false); ?>
</div>

</body>
</html>
