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
    <link href="<?php echo Yii::$app->homeUrl;?>css/widgets.css" rel="stylesheet">
    <link href="<?php echo Yii::$app->homeUrl;?>css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::$app->homeUrl;?>css/style-responsive.css" rel="stylesheet" />	
    <link href="<?php echo Yii::$app->homeUrl;?>css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">    
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">St John's <span class="lite">High School</span></a>
            <!--logo end-->
            
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo Yii::$app->homeUrl ;?>img/avatar5.png">
                            </span>
                            <span class="username"><?php echo Yii::$app->user->identity->username; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>                                                       
                            <li>
                                <a href="<?php echo Yii::$app->homeUrl;?>site/logout"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="<?php if(Yii::$app->controller->id == 'dashboard') echo "active"; ?>">
                      <a class="" href="<?php echo Yii::$app->homeUrl;?>dashboard">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
		  <li class="<?php if(Yii::$app->controller->id == 'student') echo "active"; ?>">
                      <a class="" href="<?php echo Yii::$app->homeUrl;?>student">
                          <i class="fa fa-users"></i>
                          <span>Add Students</span>
                      </a>
                  </li>
		  <li class="<?php if(Yii::$app->controller->id == 'addclass') echo "active"; ?>">
                      <a class="" href="<?php echo Yii::$app->homeUrl;?>addclass">
                          <i class="fa fa-book"></i>
                          <span>Add Class</span>
                      </a>
                  </li>		  
		  <li class="<?php if(Yii::$app->controller->id == 'addsubject') echo "active"; ?>">
                      <a class="" href="<?php echo Yii::$app->homeUrl;?>addsubject">
                          <i class="fa fa-book"></i>
                          <span>Add Subject</span>
                      </a>
                  </li>
		  <li class="<?php if(Yii::$app->controller->id == 'mark') echo "active"; ?>">
                      <a class="" href="<?php echo Yii::$app->homeUrl;?>mark">
                          <i class="fa fa-table"></i>
                          <span>Add Marks</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      	<?php echo $content; ?>
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?php echo Yii::$app->homeUrl;?>js/jquery.js"></script>
    <script src="<?php echo Yii::$app->homeUrl;?>js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo Yii::$app->homeUrl;?>js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::$app->homeUrl;?>js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo Yii::$app->homeUrl;?>js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo Yii::$app->homeUrl;?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo Yii::$app->homeUrl;?>js/jquery.nicescroll.js" type="text/javascript"></script>   
   
    <!--custome script for all page-->
    <script src="<?php echo Yii::$app->homeUrl;?>js/scripts.js"></script>
    <!-- custom script for this page-->   
    <script src="<?php echo Yii::$app->homeUrl;?>js/jquery.autosize.min.js"></script>
    <script src="<?php echo Yii::$app->homeUrl;?>js/jquery.placeholder.min.js"></script>    
    <script src="<?php echo Yii::$app->homeUrl;?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo Yii::$app->homeUrl;?>js/dataTables.bootstrap.min.js"></script>   
   <script>    
    $(document).ready(function() {
		$('#example').DataTable({"language": {
    }});
    });
  </script>
  </body>
</html>
