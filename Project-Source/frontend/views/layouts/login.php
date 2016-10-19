<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->head() ?>    
    <!-- Bootstrap CSS -->    
    <link href="<?php echo Yii::$app->homeUrl;?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo Yii::$app->homeUrl;?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo Yii::$app->homeUrl;?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo Yii::$app->homeUrl;?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->		
    <link href="<?php echo Yii::$app->homeUrl;?>css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::$app->homeUrl;?>css/style-responsive.css" rel="stylesheet" />		
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body class="login-img3-body">
    <div class="container">
	<?php echo $content; ?>
    </div>
  </body>
</html>
