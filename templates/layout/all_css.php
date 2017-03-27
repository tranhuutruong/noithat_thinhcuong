<!-- my-css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/animate.css" type="text/css" rel="stylesheet" />
<link href="css/popup.css" type="text/css" rel="stylesheet" />
<link href="css/default.css" type="text/css" rel="stylesheet" />
<link href="style.css" type="text/css" rel="stylesheet" />
<!-- mmenu -->
<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />


<!-- jquery -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js" ></script>

<!-- slick -->
<link rel="stylesheet" type="text/css" href="css/slick.css"/>
<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

<?php if($_REQUEST['com']=='index' || $_REQUEST['com']=='' || $_REQUEST['com']==null){ ?>
	<!-- Slider Jssor -->
	<link href="css/css_jssor_slider.css" type="text/css" rel="stylesheet" />
<?php } ?>

<?php if(($_REQUEST['com']=='san-pham' || $_REQUEST['com']=='thiet-ke' || $_REQUEST['com']=='cong-trinh') && $id!=''){ ?>
	<!-- Cloud Zoom -->
	<link href="css/cloudzoom.css" type="text/css" rel="stylesheet" /> 
	<!-- Swipe box -->
	<link rel="stylesheet" href="css/swipebox.css">
	<!-- Tab -->
	<link href="css/tab.css" type="text/css" rel="stylesheet" />
<?php } ?>


